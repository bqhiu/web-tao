<?php require('../config/config.php');
$i = 1;
$list = [];
$list_code = $ManhDev->get_list("SELECT * FROM `soucerCode` ORDER BY `id` DESC ");
foreach($list_code as $row) {
$img = [];
$list_img_code = $ManhDev->get_list("SELECT * FROM `demo_img_code` WHERE `code` = '".$row['code']."' ORDER BY `id` DESC ");
foreach($list_img_code as $row2) {
$img[] = [
    "img" => $row2['img']
    ];
}
$list[] = [
    "id" => $row['id'],
    "code" => $row['code'],
    "img" => $row['img'],
    "title" => $row['title'],
    "money" => $row['money'],
    "download" => $row['download'],
    "note" => $row['note'],
    "demoImg" => $img
    ];
}

echo json_encode([
    "data" => $list
    ]);
?>




