<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

if(isset($_GET['key'])) {
$key = $_GET['key'];
}
date_default_timezone_set('Asia/Ho_Chi_Minh');

$kt_key = $ManhDev->query("SELECT * FROM `key_log` WHERE `key_code` = '$key' ")->fetch_array();
$name     = $kt_key["name"]; #tên người mua
$key_user = $kt_key['key_code']; #key get từ hệ thống
$ngaytao1 = $kt_key["start"]; #time hạn mã hóa
$ketthuc1 = $kt_key["end"]; #time hạn mã hóa
$time12   = date('d-m-Y');
$hienntai = strtotime($time12); #mã hóa time hiện tại sang int
$giai_start  = date('d-m-Y',$kt_key['start']); #giải mã time mua
$giai_end    = date('d-m-Y',$kt_key['end']); #giải mã time hạn

if(empty($_GET['key'])) {
die(json_encode([
    "status" => "error",
    "messenger" => "Trường Key Code Không Được Để Trống!"
    ]));
} else if($_GET['key'] == "") {
die(json_encode([
    "status" => "error",
    "messenger" => "Trường Key Code Không Được Để Trống!"
    ]));
} else if(!$kt_key) {
die(json_encode([
    "status" => "error",
    "messenger" => "Key Không Tồn Tại! Bạn Chắc Chắc Rằng Đã Nhập Đúng Key?"
    ]));
} else if($key_user !== $key) {
die(json_encode([
    "status" => "error",
    "messenger" => "Key Không Tồn Tại Trên Hệ Thống! Hãy Kiểm Tra Lại Key Bạn Nhập"
    ]));
} else if($kt_key["status"] == "off") {
   die(json_encode([
    "status" => "error",
    "messenger" => "Key Chưa Được Gia Hạn?"
    ]));
} else {
if($ketthuc1 <= $hienntai) {
die(json_encode([
    "status" => "error",
    "messenger" => "Key Hết Hạn! Hãy Gia Hạn Để Tiếp Tục Sử Dụng!"
    ]));
$ManhDev->update("key_log", [
            'status' => "off"
            ], " `key_code` = '".$_GET['key']."' ");
} else {
die(json_encode([
    "status"   => "success",
    "name"     => $name,
    "key_code" => $key_user,
    "amount"   => $kt_key["amount"]." Day",
    "start"    => $giai_start,
    "end"      => $giai_end
    ]));
}
}