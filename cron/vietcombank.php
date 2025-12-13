<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

 $dataPost = array(
 "Loai_api" => "lsgd",
 );
 $curl = curl_init();
 curl_setopt_array($curl, array(
 CURLOPT_URL => "https://api.dichvudark.vn/api/ApiVcb",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_SSL_VERIFYPEER => false,
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => $dataPost,
 CURLOPT_HTTPHEADER => array(
 "Code: iGpZDQ2KpnTb39wwGbJAWjU52TT3tT0FidRNJYuhGh9L7xF9M2",
 "Token: ".$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'api_key_vcb' ")['value'])
 ));
 $response = curl_exec($curl);
 curl_close($curl);
 $ketqua = json_decode($response, true);
 $tranList = $ketqua['data']['ChiTietGiaoDich'];
 if(empty($tranList)) {
     echo json_encode([
         "error" => '1',
         "messenger" => 'Lỗi Khi Get - Có Thể Là Chưa Có Giao Dịch',
         'data' => $response
         ]);
 } else {
     $list = [];
     for($f=0;$f<count($tranList);$f++) {
         
         if($tranList[$f]['CD'] == "+") {
         $tranId     = strtoupper(base64_encode($tranList[$f]['SoThamChieu'])); #mã giao dịch
         $money       = explode(',', $tranList[$f]['SoTienGhiCo'])[0]."000"; #số tiền
         $comment     = $tranList[$f]['MoTa']; #nội dung
         
         $noidung = $ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nd_bank' ")['value'];
         $user_bank = explode($noidung, $comment)[1];
         
         
         $history_Momo = $ManhDev->query("SELECT * FROM `cron` WHERE `tranId` = '$tranId' ")->fetch_array();
         if(!$history_Momo) {
             $info_user = $ManhDev->get_row("SELECT * FROM `users` WHERE `username` = '$user_bank' ");
             if($info_user) {
                $cong_nap_user   = $info_user['tong_nap'] + $money;
                $cong_tien_user  = $info_user['money'] + $money;
                
         $ManhDev->insert("cron", [
                'username'    => $info_user['username'],
                'phone'       => '0528139892',
                'tranId'      => $tranId,
                'partnerCode' => 'VietcomBank',
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
                'note'       => "Nạp VietComBank Auto Thành Công! Nhận Được: ".$money." Coin",
                'ip'         => getip(),
                'useragent'  => $_SERVER["HTTP_USER_AGENT"],
                'time'       => $time
                ]);
         
         $list[] = [
             "error" => '0',
             'tranId' => $tranId,
             'partnerCode' => 'VietComBank',
             'amount' => $money,
             'comment' => $comment,
             'user' => $user_bank
             ];
         } else {
             $list[] = [
                 "error" => '1',
                 "messenger" => 'Username Không Tồn Tại',
                 'data' => $comment,
                 'bank1' => $user_bank1,
                 'bank2' => $user_bank2
                 ];
         }
         
        } else {
            $list[] = [
                 "error" => '1',
                 "messenger" => 'Mã Giao Dịch Đã Tồn Tại',
                 'data' => $tranId
                 ];
        }
       }
     }
     die(json_encode([
             "data" => $list
             ]));
 }