<?php require('../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../public/client/pages/404.php');
die();
} else {
$idSouce = addslashes($_POST['id']);
$token = $_POST['token'];
$info_sourcer = $ManhDev->query("SELECT * FROM `soucerCode` WHERE `id` = '$idSouce' ")->fetch_array();

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$token' ")->fetch_array();

$tong_tien = $info_sourcer['money'];
if(empty($check_users)) {
die(json_encode([
    "status" => "error",
    "msg" => "Api Token Không Hợp Lệ"]));
} else if(empty($idSouce) || empty($token)) {
die(json_encode([
    "status" => "error",
    "msg" => "Thiếu Dữ Liệu Đầu Vào"]));
} else if($check_users['money'] < $tong_tien) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Không Đủ Tiền Để Thực Hiện"]));
} else {
$trading = random('QWERTYUIOPASDFGHJKLZXCVBNM0123456789', 12);
$trutientt = $check_users['money'] - $tong_tien;
$congtiendt = $check_users['tong_tru'] + $tong_tien;
$congdown = $info_sourcer['download'] + 1;


$ManhDev->update("users", [
            'money' => $trutientt,
            'tong_tru' => $congtiendt
            ], " `username` = '".$check_users['username']."' "); #trừ tiền thành viên

$ManhDev->update("soucerCode", [
            'download' => $congdown,
            ], " `id` = '$idSouce' "); #update lượt tải

$ManhDev->insert("history_Code", [
                'username'  => $check_users['username'],
                'title'     => $info_sourcer['title'],
                'money'     => $tong_tien,
                'trading'   => $trading,
                'link'      => $info_sourcer['linkDown'],
                'time'       => $time
                ]);

$ManhDev->insert("log_site", [
                'username'   => $check_users['username'],
                'type'       => 'code',
                'note'       => 'Thanh Toán Hóa Đơn Mua Sourcer Code',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Mua Sourcer Code Thành Công",
    "id" => $idSouce,
    "title" => $info_sourcer['title'],
    "money" => $tong_tien,
    "linkCode" => $info_sourcer['linkDown']
    ]));
}
}