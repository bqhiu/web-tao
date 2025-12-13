<?php require('../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../public/client/pages/404.php');
die();
} else {
$api = $_POST['token'];
$usernamen = addslashes($_POST['receiver']);
$money = addslashes($_POST['money']);
$note = $_POST['note'];

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$usernamen' "); #người nhận

$check_i_am = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$api' ")->fetch_array(); #đơn vị chuyển

$tong_tien = $money + 100;

if(!$check_i_am) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Hợp Lệ"]));
} else if(empty($usernamen) || empty($money) || empty($api)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if($check_i_am['money'] < $tong_tien) {
die(json_encode([
    "status" => "error",
    "msg" => "Số Dư Của Bạn Không Đủ Để Thực Hiện"]));
} else if($money > 20000000) {
die(json_encode([
    "status" => "error",
    "msg" => "Chuyển Tối Đa Trong 1 Tháng Là 20.000.000 VND"]));
} else if($money < 10000) {
die(json_encode([
    "status" => "error",
    "msg" => "Tối Thiểu Chuyển Là 10.000đ"]));
} else if(empty($check_user)) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Nhận Không Hợp Lệ"]));
} else if($check_i_am['username'] == $usernamen) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Nhận Phải Khác Tài Khoản Gửi"]));
} else {
$trans_id = rand(10000, 999999);

$tong_tien = $check_i_am['money'] - $money;
$tong_cong = $check_i_am['tong_tru'] + $money;
$nguoingan_money = $check_user['money'] + $money;

$ManhDev->insert("transferMoney", [
                'username' => $check_i_am['username'],
                'receiver' => $usernamen,
                'money'    => $money,
                'note'     => $note,
                'time'     => $time
                ]);

$ManhDev->update("users", [
            'money' => $tong_tien,
            'tong_tru' => $tong_cong
            ], " `username` = '".$check_i_am['username']."' "); #trừ tiền người chuyển

$ManhDev->update("users", [
            'money' => $nguoingan_money
            ], " `username` = '$usernamen' "); #cộng tiền người nhận

$ManhDev->insert("log_site", [
                'username'   => $check_i_am['username'],
                'type'       => 'transfer',
                'note'       => 'Tạo Lệnh Chuyển Tiền',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Chuyển Tiền Đến ".$usernamen." Thành Công!"]));
}
}