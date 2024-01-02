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

    if (isset($_GET['test_id'])) {
        $customer_id = $_GET['test_id'];

        $sql_delete_customer = "DELETE FROM formtest WHERE test_id='$customer_id'";
        
        if ($conn->query($sql_delete_customer) === TRUE) {
            header("Location: ./search_item.php");
            exit();
        } else {
            echo "Lỗi: " . $conn->error;
        }

    }

    $conn->close();
?>
