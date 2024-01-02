<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý khi nhận được yêu cầu POST từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['SoDienThoai'])) {
        $phone_number = $_POST['SoDienThoai'];

        // Sử dụng câu truy vấn xóa dữ liệu từ bảng NhanVien dựa trên số điện thoại
        $sql = "DELETE FROM NhanVien WHERE SoDienThoai='$phone_number'";

        // Thực thi truy vấn xóa
        if ($conn->query($sql) === TRUE) {
            echo "Xóa nhân viên thành công";
        } else {
            echo "Lỗi khi xóa nhân viên: " . $conn->error;
        }
    }
}

// Đóng kết nối
$conn->close();
?>