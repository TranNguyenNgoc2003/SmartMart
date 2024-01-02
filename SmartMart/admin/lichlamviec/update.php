<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $maNhanVien = $_POST['maNhanVien'];
    $ngay = $_POST['ngay'];
    $caLam = $_POST['caLam'];

    // Chuẩn bị câu lệnh SQL UPDATE
    $sql = "UPDATE QuanLyLichLamViec SET MaNhanVien='$maNhanVien', Ngay='$ngay', CaLam='$caLam' WHERE ID=$id";

    // Thực hiện UPDATE dữ liệu
    if ($conn->query($sql) === TRUE) {
        header("Location: your_main_page.php"); // Điều hướng về trang chính sau khi cập nhật thành công
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>