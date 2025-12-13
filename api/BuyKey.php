<?php require('../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../public/client/pages/404.php');
die();
} else {
$api = $_POST['token'];
$name = addslashes($_POST['name']);
$key_code = addslashes($_POST['key']);
$amount = addslashes($_POST['amount']);

$check_key = $ManhDev->query("SELECT * FROM `key_log` WHERE `key_code` = '$key_code' ")->fetch_array();

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$api' ")->fetch_array();

$tong_tien = 500 * $amount;

if(empty($name) || empty($key_code) || empty($amount) || empty($api)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin!"]));
} else if(!$check_users) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Tồn Tại"]));
} else if($check_users['money'] < $tong_tien) {
die(json_encode([
    "status" => "error",
    "msg" => "Bạn Không Đủ ".tien($tong_tien)."đ Để Thực Hiện Giao Dịch"]));
} else if($amount < 2) {
die(json_encode([
    "status" => "error",
    "msg" => "Mua Tối Thiểu Là 2 Ngày"]));
} else if($amount <= 0) {
die(json_encode([
    "status" => "error",
    "msg" => "Không Được Nhập 0"]));
} else if($check_key) {
die(json_encode([
    "status" => "error",
    "msg" => "Key Này Bị Vi Phạm! Mua Key Khác"]));
} else {

$trutientt = $check_users['money'] - $tong_tien;
$congtiendt = $check_users['tong_tru'] + $tong_tien;

$time1 = date("d-m-Y");
$time_stamp = strtotime($time1);
$date = $time_stamp+(int)$amount*24*60*60;

$ManhDev->update("users", [
            'money' => $trutientt,
            'tong_tru' => $congtiendt
            ], " `username` = '".$check_users['username']."' ");

$ManhDev->insert("key_log", [
                'username'    => $check_users['username'],
                'name'        => $name,
                'key_code'    => $key_code,
                'amount'      => $amount,
                'start'       => $time_stamp,
                'end'         => $date,
                'status'      => 'on'
                ]);

$ManhDev->insert("log_site", [
                'username'   => $check_users['username'],
                'type'       => 'key',
                'note'       => 'Mua Key Thành Công',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Mua Key Thành Công!",
    "name" => $name,
    "key_code" => $key_code,
    "amount" => $amount,
    "start" => date('d-m-Y', $time_stamp),
    "end" => date('d-m-Y', $date),
    "int_start" => $time_stamp,
    "int_end" => $date,
    ]));
}
}