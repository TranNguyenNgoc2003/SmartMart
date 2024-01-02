<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy thông tin từ form
$MaNV = $_POST['MaNV'];
$HoTen = $_POST['HoTen'];
$NgaySinh = $_POST['NgaySinh'];
$GioiTinh = $_POST['GioiTinh'];
$DiaChi = $_POST['DiaChi'];
$SoDienThoai = $_POST['SoDienThoai'];
$Email = $_POST['Email'];
$ChucVu = $_POST['ChucVu'];
$Luong = $_POST['Luong'];
$NgayBatDauLamViec = $_POST['NgayBatDauLamViec'];

// Thực hiện truy vấn để thêm nhân viên mới vào cơ sở dữ liệu
$sql = "INSERT INTO NhanVien (MaNV, HoTen, NgaySinh, GioiTinh, DiaChi, SoDienThoai, Email, ChucVu, Luong, NgayBatDauLamViec)
        VALUES ('$MaNV', '$HoTen', '$NgaySinh', '$GioiTinh', '$DiaChi', '$SoDienThoai', '$Email', '$ChucVu', '$Luong', '$NgayBatDauLamViec')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm nhân viên thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>