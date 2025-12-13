<?php require('../config/config.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include('../public/client/pages/404.php');
die();
} else {
$token = $_POST['token'];
$id = addslashes($_POST['id']);
$amount = addslashes($_POST['amount']);

$info_category = $ManhDev->query("SELECT * FROM `category` WHERE `id` = '$id' ")->fetch_array();

$check_users = $ManhDev->query("SELECT * FROM `users` WHERE `apitoken` = '$token' ")->fetch_array();

$code = $info_category['code'];
$money_ = $info_category['money'];
$query_taikhoan = $ManhDev->query("SELECT * FROM `account` WHERE `code` = '$code' AND `trading` is null ");
$query_category = $ManhDev->query("SELECT * FROM `category` WHERE `code` = '$code' AND `status` = 'on' ");
$tong_tien = $money_ * $amount;
if(empty($check_users)) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Chính Xác"]));
} else if(empty($amount)) {
die(json_encode([
    "status" => "error",
    "msg" => "Vui Lòng Nhập Số Lượng Cần Mua"]));
} else if(empty($id)) {
die(json_encode([
    "status" => "error",
    "msg" => "ID Dịch Vụ Không Được Để Trống"]));
} else if(empty($token)) {
die(json_encode([
    "status" => "error",
    "msg" => "Token Api Không Được Để Trống"]));
} else if($amount <= 0) {
die(json_encode([
    "status" => "error",
    "msg" => "Mua Tối Thiểu Là 1 Tài Khoản"]));
} else if($amount > 10000) {
die(json_encode([
    "status" => "error",
    "msg" => "Mua Tối Đa Là 10.000 Tài Khoản"]));
} else if($query_category->num_rows <= 0) {
die(json_encode([
    "status" => "error",
    "msg" => "Không Tồn Tại Sản Phẩm Này"]));
} else if($query_taikhoan->num_rows < $amount) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Nguyên Trên Hệ Thống Không Đủ"]));
} else if($check_users['money'] < $tong_tien) {
die(json_encode([
    "status" => "error",
    "msg" => "Bạn Không Đủ Số Dư Thanh Toán"]));
} else if($check_users['bannd'] == 1) {
die(json_encode([
    "status" => "error",
    "msg" => "Tài Khoản Của Bạn Đã Bị Vi Phạm Chính Sách Cộng Đồng Của Chúng Tôi"]));
} else {
$trading = random('QWERTYUIOPASDFGHJKLZXCVBNM0123456789', 12);
$trutientt = $check_users['money'] - $tong_tien;
$congtiendt = $check_users['tong_tru'] + $tong_tien;
$ManhDev->update("users", [
            'money' => $trutientt,
            'tong_tru' => $congtiendt
            ], " `username` = '".$check_users['username']."' "); #trừ tiền thành viên
$ManhDev->update("account", [
            'trading'  => $trading,
            'username' => $check_users['username'],
            'time'     => $time
            ], " `username` IS NULL AND `code` = '$code' LIMIT ".$amount." "); #cập nhật người mua acc
$ManhDev->insert("orders", [
                'username'  => $check_users['username'],
                'title'     => $info_category['title'],
                'amount'    => $amount,
                'money'     => $tong_tien,
                'trading'   => $trading,
                'time'      => $time
                ]);
$ManhDev->insert("log_site", [
                'username'   => $check_users['username'],
                'type'       => 'account',
                'note'       => 'Thanh Toán Hóa Đơn #'.$trading,
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);

$account = [];
$list_acc = $ManhDev->get_list("SELECT * FROM `account` WHERE `trading` = '$trading' ");
foreach($list_acc as $row) {
$account[] = [
    "account" => $row['note']
    ];
}

die(json_encode([
    "status" => "success",
    "msg" => "Thanh toán đơn hàng thành công.",
    "data" => [
    "trans_id" => $trading,
    "name" => $row_source['title'],
    "amount" => $amount,
    "time" => $time,
    "lists" => $account
    ]
    ]));
}
}
?>