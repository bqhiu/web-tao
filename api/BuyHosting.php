<?php require('../../../../../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../../../../public/client/pages/404.php');
die();
} else {
$token = $_POST['token'];
$mien = $_POST['domain'];
$goi = $_POST['typeHost'];

if($goi == "hk1") {
$goi = "HongKong 1";
$tong_tien = 14000;
} else if($goi == "hk2") {
$goi = "HongKong 2";
$tong_tien = 22000;
} else if($goi == "hk3") {
$goi = "HongKong 3";
$tong_tien = 27000;
} else if($goi == "hk4") {
$goi = "HongKong 4";
$tong_tien = 33000;
} else if($goi == "hk5") {
$goi = "HongKong 5";
$tong_tien = 43000;
} else if($goi == "hk6") {
$goi = "HongKong 6";
$tong_tien = 53000;
} else {
$goi = "";
$tong_tien = 9999999999999999999;
}

$check_host = $ManhDev->query("SELECT * FROM `history_Host` WHERE `domain` = '$mien' ")->fetch_array();

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$token' ")->fetch_array();

if(!$check_users) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Hợp Lệ"]));
} else if(empty($mien) || empty($goi)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin!"]));
} else if($check_users['money'] < $tong_tien) {
die(json_encode([
    "status" => "error",
    "msg" => "Bạn Không Đủ ".tien($tong_tien)."đ Để Mua Host"]));
} else if($check_host) {
die(json_encode([
    "status" => "error",
    "msg" => "Miền Đã Tồn Tại Trên Hệ Thống"]));
} else {
$email = 'lumanhgioi.vn@gmail.com';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => 'https://dailysieure.com/api-mua-host?key='.$key_dlsr.'&goi='.$goi.'&tenmien='.$mien.'&email='.$email,
    CURLOPT_USERAGENT => 'KEYVIP XYZ MANH DEV',
    CURLOPT_SSL_VERIFYPEER => false,
));
$ketqua = curl_exec($curl);
curl_close($curl);
$ketqua = json_decode($ketqua, true);
$status = $ketqua['status'];
$msg = $ketqua['msg'];
if($status == '2') {
$taikhoan = $ketqua['taikhoan'];
$matkhau = $ketqua['matkhau'];
$ngaymua = $ketqua['ngaymua'];
$ngayhet = $ketqua['ngayhet'];

$trutientt = $check_users['money'] - $tong_tien;
$congtiendt = $check_users['tong_tru'] - $tong_tien;

$ManhDev->update("users", [
            'money' => $trutientt,
            'tong_tru' => $congtiendt
            ], " `username` = '".$check_users['username']."' ");

$ManhDev->insert("log_site", [
                'username'   => $check_users['username'],
                'type'       => 'hosting',
                'note'       => 'Đăng Kí Hosting Thành Công',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

$ManhDev->insert("history_Host", [
                'username'   => $check_users['username'],
                'goi'        => $goi,
                'taikhoan'   => $taikhoan,
                'matkhau'    => $matkhau,
                'ngaymua'    => $ngaymua,
                'ngayhet'    => $ngayhet,
                'domain'     => $mien,
                'money'      => $tong_tien,
                'status'     => 'hoantat'
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Đăng Kí Hosting Thành Công!",
    "typeHost" => $goi,
    "linkLogin" => "http://hkg112.arandomserver.com:2083",
    "username" => $taikhoan,
    "password" => $matkhau,
    "start" => $ngaymua,
    "end" => $ngayhet,
    "money" => $tong_tien
    ]));
} else {
die(json_encode([
    "status" => "error",
    "msg" => $msg
    ]));
}
}
}