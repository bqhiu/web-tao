<?php require('../../../../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../../../../public/client/pages/404.php');
die();
} else {
if($_POST['type'] == "login") {
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$username' ");

if(empty($username) || empty($password)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if(!$check_user) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Không Tồn Tại"]));
} else if($check_user['password'] !== $password) {
die(json_encode([
    "status" => "error",
    "msg" => "Mật Khẩu Không Chính Xác"]));
} else if($check_user['bannd'] > '1') {
die(json_encode([
    "status" => "error",
    "msg" => "Bạn Đã Bị Band Vì Vi Phạm Tiêu Chuẩn Cộng Đồng"]));
} else if($check_user['securityEmail'] == "1") {
$ma_xac_thuc = rand(1000, 9999);
$ManhDev->update("users", [
            'otp_code' => $ma_xac_thuc,
            'lastdate' => $time
            ], " `username` = '$username' ");
$note = "Mã Xác Thực Email Của Bạn là: <code>$ma_xac_thuc</code>";
$mail = $check_user['email'];
echo guimail($mail, $note);
die(json_encode([
    "status" => "Mail",
    "msg" => "Vui Lòng Nhập Mã Mà Chúng Tôi Gửi Vào Gmail"]));
} else if($check_user['securityPass'] == "1") {
die(json_encode([
    "status" => "Pass",
    "msg" => "Vui Lòng Nhập Mật Khẩu Cấp 2"]));
} else {

$ManhDev->update("users", [
            'otp_code' => NULL,
            'lastdate' => $time
            ], " `username` = '$username' ");
        
$ManhDev->insert("log_site", [
                'username'   => $username,
                'type'       => 'login',
                'note'       => 'Đăng Nhập Vào Hệ Thống',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

$_SESSION['username'] = $username;

die(json_encode([
    "status" => "success",
    "msg" => "Đăng Nhập Thành Công!"]));
}
}

if($_POST['type'] == "signup") {
$name     = addslashes($_POST['name']);
$phone    = addslashes($_POST['phone']);
$email    = $_POST['email'];
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$api_token = api_token();
$captcha = $_POST['captcha'];

if($demo_website == "on") {
die(json_encode([
    "status" => "error",
    "msg" => "Website Demo Không Thể Sử Dụng Chức Năng Này"]));
}

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$username' ");

$check_phone = $ManhDev->get_row("SELECT * FROM `users` WHERE `phone` = '$phone' ");

$check_email = $ManhDev->get_row("SELECT * FROM `users` WHERE `email` = '$email' ");

if(empty($username) || empty($password) || empty($name) || empty($phone) || empty($email)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if(empty($captcha)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Captcha!"]));
} else if($check_user) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Đã Tồn Tại Trên Hệ Thống"]));
} else if($check_email) {
die(json_encode([
    "status" => "error",
    "msg" => "Email Đã Tồn Tại Trên Hệ Thống"]));
} else if($check_phone) {
die(json_encode([
    "status" => "error",
    "msg" => "Số Điện Thoại Đã Tồn Tại Trên Hệ Thống"]));
} else {
        
$ManhDev->insert("users", [
                'username'      => $username,
                'password'      => $password,
                'email'         => $email,
                'name'          => $name,
                'phone'         => $phone,
                'tong_nap'      => '0',
                'money'         => '0',
                'tong_tru'      => '0',
                'level'         => '0',
                'securityEmail' => '0',
                'securityPass'  => '0',
                'otp_code'      => NULL,
                'bannd'         => '0',
                'apitoken'      => $api_token,
                'lastdate'      => $time,
                'time'          => $time
                ]);

die(json_encode([
    "status" => "success",
    "msg" => "Đăng Ký Tài Khoản Thành Công!"]));
}
}

#Form Xác Nhận Mã Email
if($_POST['type'] == "xacnhanmail") {
$username = addslashes($_POST['username']);
$otp = addslashes($_POST['macode']);

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$username' ");

if(empty($username) || empty($otp)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if(!$check_user) {
die(json_encode([
    "status" => "error",
    "msg" => "Username Không Tồn Tại"]));
} else if($check_user['otp_code'] !== $otp) {
die(json_encode([
    "status" => "error",
    "msg" => "Mã Xác Thực Không Chính Xác"]));
} else {
$ManhDev->update("users", [
            'otp_code' => NULL,
            'lastdate' => $time
            ], " `username` = '$username' ");
        
$ManhDev->insert("log_site", [
                'username'   => $username,
                'type'       => 'login',
                'note'       => 'Đăng Nhập Vào Hệ Thống',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

$_SESSION['username'] = $username;

die(json_encode([
    "status" => "success",
    "msg" => "Đăng Nhập Thành Công!"]));
}
}

#Form Xác Nhận Mật Khẩu Cấp 2
if($_POST['type'] == "xacnhanpass") {
$username = addslashes($_POST['username']);
$password2 = addslashes($_POST['mkc2']);

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$username' ");

if(empty($username) || empty($password2)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Đầy Đủ Thông Tin"]));
} else if(!$check_user) {
die(json_encode([
    "status" => "error",
    "msg" => "Username Không Tồn Tại"]));
} else if($check_user['password2'] !== $password2) {
die(json_encode([
    "status" => "error",
    "msg" => "Mật Khẩu Cấp 2 Không Chính Xác"]));
} else {
$ManhDev->update("users", [
            'lastdate' => $time
            ], " `username` = '$username' ");
        
$ManhDev->insert("log_site", [
                'username'   => $username,
                'type'       => 'login',
                'note'       => 'Đăng Nhập Vào Hệ Thống',
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

$_SESSION['username'] = $username;

die(json_encode([
    "status" => "success",
    "msg" => "Đăng Nhập Thành Công!"]));
}
}


}