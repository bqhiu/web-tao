<?php
header('Content-Type: application/json;charset=utf-8');

// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "letrongt_tgd";
$password = "letrongt_tgd";
$database = "letrongt_tgd";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL để lấy danh sách các giá trị từ cột 'activite'
$sql = "SELECT activite FROM domain";
$result = $conn->query($sql);

$validWebsites = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $validWebsites[] = $row["activite"];
    }
}

$conn->close();

// Lấy giá trị của tham số 'linkweb' từ URL
$linkweb = $_GET['linkweb'];

// Kiểm tra xem 'linkweb' có rỗng không
if (empty($linkweb)) {
    $response = [
        "Copyright" => "Lê Trọng Truyền",
        "status" => "error",
        "code" => 200,
        "message" => "Vui Lòng Nhập Link Web"
    ];
} elseif (in_array($linkweb, $validWebsites)) {
    $response = [
        "Copyright" => "Lê Trọng Truyền",
        "status" => "success",
        "message" => "Website Chính Chủ"
    ];
} else {
    $response = [
        "Copyright" => "Lê Trọng Truyền",
        "status" => "error",
        "message" => "Website Fakee"
    ];
}

// Xuất JSON response
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>