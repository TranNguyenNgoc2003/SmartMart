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
        $customer_id = $_POST['customer_id'];
        $ho_ten = $_POST['ho_ten'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $dia_chi = $_POST['dia_chi'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $email = $_POST['email'];

        $sql = "UPDATE userdata SET user_name='$ho_ten', NgaySinh='$ngay_sinh', GioiTinh='$gioi_tinh', DiaChi='$dia_chi', user_phone='$so_dien_thoai', user_email='$email' WHERE user_id='$customer_id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ./search_khachhang.php");
            exit();

        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    $conn->close();
?>