<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])) {
include $_SERVER['DOCUMENT_ROOT'].'/public/client/pages/404.php';
die();
} else {
$api_key   = $_POST['ApiKey'];
$Pin       = check_string($_POST['Pin']); #Mã Pin
$Seri      = check_string($_POST['Seri']); #Số Seri
$CardType  = check_string($_POST['CardType']); #Loại Thẻ
$CardValue = check_string($_POST['CardValue']); #Mệnh Giá
$Requestid = check_string($_POST['Requestid']); #Nội Dung Gửi Lên
$UrlSite   = $_POST['UrlSite']; #Link CallBack
$thucnhan  = $CardValue - $CardValue * 20 / 100;

$check_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `apitoken` = '$api_key' ");

if(empty($api_key)) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường Dữ Liệu Api Token Không Được Thiếu"
    ]));
} else if(empty($Pin) || empty($Seri)) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường Dữ Liệu Seri Hoặc Pin Không Được Thiếu"
    ]));
} else if(empty($CardType)) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường Dữ Liệu Loại Thẻ Không Được Thiếu"
    ]));
} else if(empty($CardValue)) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường Dữ Liệu Mệnh Giá Không Được Thiếu"
    ]));
} else if(empty($UrlSite)) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường Dữ Liệu Link Callback Site Không Được Thiếu"
    ]));
} else if(!$check_user) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Trường API Token Gửi Lên Không Chính Xác"
    ]));
} else if(strlen($Seri) < 5 || strlen($Pin) < 5) {
die(json_encode([
    "Code"    => "0",
    "Message" => "Độ Dài Mã Thẻ Hoặc Số Seri Không Hợp Lệ!"
    ]));
} else {
$api_key_thecao5svn = $ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'api_key_card' ")['value'];

$data = array(
    "ApiKey" => $api_key_thecao5svn, #api key
    "Pin" => $Pin, #mã thẻ
    "Seri" => $Seri, #mã seri
    "CardType" => $CardType, #loại thẻ
    "CardValue" => $CardValue, #mệnh giá
    "requestid" => $Requestid #id code
);                                                                    
$data_string = json_encode($data);                                                                                   
$ch = curl_init('https://thecao5s.vn/api/card');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')
);
$result  = curl_exec($ch);
$ketqua  = json_decode($result, true);
$TaskId  = $ketqua['TaskId'];
$Code    = $ketqua['Code'];
$Message = $ketqua['Message'];
if($Code == '1') {
$ManhDev->insert("cards", [
                'code'      => $Requestid,
                'taskId'    => $TaskId,
                'seri'      => $Seri,
                'pin'       => $Pin,
                'loaithe'   => $CardType,
                'menhgia'   => $CardValue,
                'thucnhan'  => $thucnhan,
                'username'  => $check_user['username'],
                'status'    => 'xuly',
                'note'      => $Message,
                'callback'  => $UrlSite,
                'time'      => $time,
                ]);
              
die(json_encode([
    "Code" => "1",
    "Message" => "Hệ Thống Đang Check Thẻ Cào Của Bạn",
    "TaskId" => $TaskId
    ]));
} else {
die(json_encode([
    "Code" => "0",
    "Message" => $Message,
    ]));
}
}
}