<?php
// db.php - Tập tin kết nối cơ sở dữ liệu

$servername = "localhost"; // Địa chỉ máy chủ MySQL (có thể là 'localhost' nếu bạn đang làm việc trên máy chủ local)
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL (nếu có)
$dbname = "duan119112024"; // Tên cơ sở dữ liệu bạn sử dụng

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
