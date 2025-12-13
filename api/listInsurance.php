<?php require('../config/config.php');
$i = 1;
$list = [];
$list_profile = $ManhDev->get_list("SELECT * FROM `checkscam_uytin` ORDER BY `id` DESC ");
foreach($list_profile as $row) {
$list[] = [
    "code" => $row['code'],
    "img" => "https://graph.facebook.com/".$row['id_fb']."/picture?width=200&height=200&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662",
    "name" => $row['name'],
    "facbeook" => $row['id_fb'],
    "phone" => $row['phone'],
    "website" => $row['website'],
    "service" => $row['dich_vu'],
    "money" => $row['money'],
    "note" => $row['mo_ta']
    ];
}

echo json_encode([
    "data" => $list
    ]);
?>




