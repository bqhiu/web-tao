<?php require('../../../../../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../../../../public/client/pages/404.php');
die();
} else {
$token     = $_POST['token'];
$ngan_hang = strtoupper($_POST['banking']);
$ctk       = $_POST['accountName'];
$stk       = $_POST['accountNumber'];
$chi_nhanh = strtoupper($_POST['branch']);
$money     = $_POST['money'];

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$token' ")->fetch_array();

if(empty($token)) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Hợp Lệ"]));
} else if(empty($ngan_hang) || empty($ctk) || empty($stk) || empty($chi_nhanh) || empty($money) || empty($token)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if(!$check_users) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Hợp Lệ"]));
} else if($check_users['money'] < $money) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Không Đủ Tiền Tạo Lệnh"]));
} else if($money < 50000) {
die(json_encode([
    "status" => "error",
    "msg" => "Rút Tối Thiểu Là 50.000 VND"]));
} else {
$tong_tien = $check_users['money'] - $money;
$tong_cong = $check_users['tong_tru'] + $money;


$ManhDev->insert("withdrawCard", [
                'username'    => $check_users['username'],
                'banking'     => $ngan_hang,
                'nameBank'    => $ctk,
                'numberBank'  => $stk,
                'branchBank'  => $chi_nhanh,
                'statusBank'  => 'xuly',
                'moneyBank'   => $money,
                'time'        => $time
                ]);

$ManhDev->update("users", [
            'money' => $tong_tien,
            'tong_tru' => $tong_cong
            ], " `username` = '".$check_users['username']."' ");

$ManhDev->insert("log_site", [
                'username'   => $check_users['username'],
                'type'       => 'withdraw',
                'note'       => 'Tạo Lệnh Rút Tiền',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Tạo Lệnh Rút Tiền Thành Công!"]));
}
}