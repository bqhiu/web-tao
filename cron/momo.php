<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

 $dataPost = array(
 "Loai_api" => "lsgd1h",
 );
 $curl = curl_init();
 curl_setopt_array($curl, array(
 CURLOPT_URL => "https://api.dichvudark.vn/api/ApiMomo",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_SSL_VERIFYPEER => false,
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => $dataPost,
 CURLOPT_HTTPHEADER => array(
 "Code: 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",
 "Token: ".$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'api_key_momo' ")['value'],
 "Hour: 1")
 ));
 $response = curl_exec($curl);
 curl_close($curl);
 $ketqua = json_decode($response, true);
 $tranList = $ketqua['tranList'];
 if(empty($tranList)) {
     echo json_encode([
         "error" => '1',
         "messenger" => 'Lỗi Khi Get - Có Thể Là Chưa Có Giao Dịch',
         'data' => $response
         ]);
 } else {
     for($f=0;$f<count($tranList);$f++) {
         
         if($tranList[$f]['io'] == "1") {
         $phoneMy     = '0528139892'; #sdt của tôi
         $tranId      = $tranList[$f]['tranId']; #mã giao dịch
         $partnerId   = $tranList[$f]['partnerId']; #sdt người gửi
         $partnerName = $tranList[$f]['partnerName']; #tên người gửi
         $partnerCode = $tranList[$f]['partnerCode']; #phương thức chuyển
         $money       = $tranList[$f]['amount']; #số tiền
         $comment     = $tranList[$f]['comment']; #nội dung
         
         $noidung = $ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nd_bank' ")['value'];
         $user_bank = explode($noidung, $comment)[1];
         
         
         
         $history_Momo = $ManhDev->query("SELECT * FROM `cron` WHERE `tranId` = '$tranId' ")->fetch_array();
         if(!$history_Momo) {
             $info_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$user_bank' ");
             if($info_user) {
                $cong_nap_user   = $info_user['tong_nap'] + $money;
                $cong_tien_user  = $info_user['money'] + $money;
                
         $ManhDev->insert("cron", [
                'username'    => $user_bank,
                'phone'       => $phoneMy,
                'tranId'      => $tranId,
                'partnerId'   => $partnerId,
                'partnerName' => $partnerName,
                'partnerCode' => 'momo',
                'amount'      => $money,
                'comment'     => $comment,
                'time'        => $time
                ]);
         
         $ManhDev->update("users", [
            'money' => $cong_tien_user,
            'tong_nap' => $cong_nap_user
            ], " `username` = '".$info_user['username']."' ");
         
         $ManhDev->insert("log_site", [
                'username'   => $info_user['username'],
                'type'       => 'money',
                'note'       => "Nạp Momo Auto Thành Công! Nhận Được: ".$money." Coin",
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);
         
         echo json_encode([
             "error" => '0',
             'phone' => $phoneMy,
             'tranId' => $tranId,
             'partnerId' => $partnerId,
             'partnerName' => $partnerName,
             'partnerCode' => 'Momo',
             'amount' => $money,
             'comment' => $comment
             ]);
         } else {
             echo json_encode([
                 "error" => '1',
                 "messenger" => 'Username Không Tồn Tại',
                 'data' => $comment
                 ]);
         }
         
        } else {
            echo json_encode([
                 "error" => '1',
                 "messenger" => 'Mã Giao Dịch Đã Tồn Tại',
                 'data' => $tranId
                 ]);
        }
       }
     }
 }