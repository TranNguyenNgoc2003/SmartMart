<?php
    session_start();

    $admin_email = $_SESSION['admin_email'];
    if (!isset($_SESSION['admin_email'])) {
        header("Location: ./../index.php");
        exit();
    }
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dacn";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_fullname = $_POST["edit_fullname"];
        $new_ngaysinh = $_POST["edit_ngaysinh"];
        $new_gioitinh = $_POST["edit_gioitinh"];
        $new_diachi = $_POST["edit_diachi"];
        $new_sdt = $_POST["edit_sdt"];
        $new_pass = $_POST["edit_pass"];

        $update_sql = "UPDATE admindata 
        SET admin_name=?, NgaySinh=?, GioiTinh=?, DiaChi=?, admin_phone=?, admin_password=? WHERE admin_email=?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("sssssss", $new_fullname, $new_ngaysinh, $new_gioitinh, $new_diachi, $new_sdt, $new_pass, $admin_email);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();

    header("Location: ./info.php");
    exit();
?>