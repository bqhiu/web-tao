<?php require('../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../public/client/pages/404.php');
die();
} else {
if(isset($_POST['token'])) {
$token = $_POST['token'];
}

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$token' ")->fetch_array();

if(empty($token)) {
echo json_encode([
    "status"=> "error",
    "msg" => "Thiếu Token API Tài Khoản"
    ]);
} else if(!$check_users) {
echo json_encode([
    "status"=> "error",
    "msg" => "Token APi Không Chính Xác"
    ]);
} else {

echo json_encode([
    "status"=> "success",
    "msg" => "Get Thông Tin Thành Công",
    "username" => $check_users['username'],
    "name" => $check_users['name'],
    "phone" => $check_users['phone'],
    "total" => $check_users['tong_nap'],
    "money" => $check_users['money'],
    "sum" => $check_users['tong_tru'],
    "level" => level($check_users['level']),
    "status" => status_user($check_users['bannd']),
    "securityEmail" => onoff($check_users['securityEmail']),
    "securityPass" => onoff($check_users['securityPass']),
    "apiToken" => $check_users['apitoken'],
    "lastDate" => $check_users['lastdate'],
    "time" => $check_users['time']
    ]);
}
}
?>