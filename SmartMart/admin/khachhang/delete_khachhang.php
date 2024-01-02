<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "sieuthi";

$conn = new mysqli($localhost, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];

    // Xóa các bình luận liên quan đến khách hàng trước
    $sql_delete_comments = "DELETE FROM commentpage WHERE MaKH='$customer_id'";
    
    if ($conn->query($sql_delete_comments) === TRUE) {
        // Sau đó, xóa thông tin khách hàng
        $sql_delete_customer = "DELETE FROM KhachHang WHERE MaKH='$customer_id'";
        
        if ($conn->query($sql_delete_customer) === TRUE) {
            echo "Xóa thông tin khách hàng thành công!";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>
