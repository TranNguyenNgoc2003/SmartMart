<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Chuẩn bị câu lệnh SQL DELETE
    $sql = "DELETE FROM QuanLyLichLamViec WHERE ID=$id";

    // Thực hiện DELETE dữ liệu
    if ($conn->query($sql) === TRUE) {
        header("Location: your_main_page.php"); // Điều hướng về trang chính sau khi xóa thành công
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>