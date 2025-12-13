<?php require('../../../../../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../../../../public/client/pages/404.php');
die();
} else {
$mien = $_POST['domain'];
$checkhttp = explode('://',$mien)[1]; #link https

if($checkhttp) {
$website = $checkhttp;
} else {
$website = $mien;
}

$tenmien = explode('.',$website)[0]; #tên miền
$duoimien = explode('.',$website)[1]; #đuôi miền

if(empty($ManhDev->users('username'))) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Đăng Nhập Để Thực Hiện"]));
} else if(empty($mien)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Tên Miền Cần Check"]));
} else if(empty($tenmien)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Tên Miền Cần Check"]));
} else if(empty($duoimien)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đuôi Miền Cần Check"]));
} else {
$check = file_get_contents("https://tenten.vn/api/check/?domain=".$website);
if($check == "1") {
die(json_encode([
    "status" => "success",
    "msg" => "Tên Miền Này Có Thể Mua! Liên Hệ ADMIN Để Mua Ngay!"]));
} else {
die(json_encode([
    "status" => "error",
    "msg" => "Tên Miền Này Đã Có Người Mua "]));
}
}
}