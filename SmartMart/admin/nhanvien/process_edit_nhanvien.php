<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MaNV = $_POST['MaNV'];
    $HoTen = $_POST['HoTen'];
    $NgaySinh = $_POST['NgaySinh'];
    $GioiTinh = $_POST['GioiTinh'];
    $DiaChi = $_POST['DiaChi'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $Email = $_POST['Email'];
    $Password_admin = $_POST['Password_admin'];
    $ChucVu = $_POST['ChucVu'];
    $Luong = $_POST['Luong'];
    $NgayBatDauLamViec = $_POST['NgayBatDauLamViec'];

    // Thực hiện truy vấn để cập nhật thông tin nhân viên trong cơ sở dữ liệu
    $sql = "UPDATE NhanVien SET 
            HoTen='$HoTen', 
            NgaySinh='$NgaySinh', 
            GioiTinh='$GioiTinh', 
            DiaChi='$DiaChi', 
            SoDienThoai='$SoDienThoai', 
            Email='$Email', 
            Password_admin='$Password_admin', 
            ChucVu='$ChucVu', 
            Luong='$Luong', 
            NgayBatDauLamViec='$NgayBatDauLamViec' 
            WHERE MaNV='$MaNV'";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thông tin nhân viên thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>