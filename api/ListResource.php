<?php require('../config/config.php');
$i = 1;
$list = [];
$list_code = $ManhDev->get_list("SELECT * FROM `category` ORDER BY `id` DESC ");
foreach($list_code as $row) {
$list[] = [
    "id" => $row['id'],
    "code" => $row['code'],
    "name" => $row['title'],
    "img" => $row['img'],
    "money" => $row['money'],
    "note" => $row['note'],
    "status" => $row['status']
    ];
}

echo json_encode([
    "status"=> "success",
    "categories" => $list
    ]);
?>




