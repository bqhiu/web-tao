<?php
// URL bạn muốn gửi yêu cầu GET
$url = "https://dichvublack.id.vn/api/spamsms?phone=";

// Số điện thoại bạn muốn thêm vào URL
$phone = "Số điện thoại của bạn ở đây";

// Tạo URL hoàn chỉnh bằng cách nối số điện thoại vào URL gốc
$fullUrl = $url . $phone;

// Khởi tạo một session cURL mới
$ch = curl_init();

// Cài đặt các tùy chọn cho session cURL
curl_setopt($ch, CURLOPT_URL, $fullUrl); // Thiết lập URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Bật chế độ trả về dữ liệu

// Thực hiện yêu cầu GET và lấy kết quả
$response = curl_exec($ch);

// Kiểm tra lỗi nếu có
if (curl_errno($ch)) {
    echo 'Lỗi cURL: ' . curl_error($ch);
}

// Đóng session cURL
curl_close($ch);

// Xử lý kết quả (ở đây, bạn có thể in ra hoặc xử lý dữ liệu theo cách bạn muốn)
echo $response;
?>
