<?php
    session_start();

    $user_email = $_SESSION['user_email'];
    if (!isset($_SESSION['user_email'])) {
        header("Location: ./../../../index.php");
        exit();
    }
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sieuthi";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM KhachHang WHERE Email='$user_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./edit_info.css">
</head>
<body>
    <div class="container header">
        <div class="logo">
            <div class="img_logo">
                <a href="./home.php">
                    <img src="./../../Image/logo.png" alt="">
                </a>
            </div>
            <div class="name_logo">
                <h3>
                    <a href="./../../home/home.php">Smart Mart</a>
                </h3>
            </div>
        </div>
        <form class="search" action="./../../search/search.php" method="POST">
            <input style="height: 30px; width: 170px;" type="text" class="form-control" name="txtSearch" id="txtSearch" aria-describedby="helpId" placeholder="Nhập tên sản phẩm">
            <button style="height: 30px; font-size: 12px; margin-left: 10px; " type="submit" class="btn btn-danger">Search</button>
        </form>

        <div class="user_name d-none d-md-inline-block">
            <a href="./../info/user.php">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </div>
    <div class="container menu">
        <div class="home" id="item">
            <div>
                <i style=" font-size:18px; margin-right: 5px;" class="fa-regular fa-user"></i>
                <span>Tài khoản</span>
            </div>
            
        </div>
        <div class="info"  id="item">
            <a href="./../info/user.php" class="item_header">
                Thông tin tài khoản
            </a>
        </div>
        <div class="edit_info" id="item">
            <a style="text-decoration: underline; color: red;"  href="./../edit_info/edit_info.php" class="item_header">
                Chỉnh sửa thông tin
            </a>
        </div>
    </div>
    <hr>
    <div class="container content">
        <div class="left">
            <div class="item">
                <a href="./../logout/logout.php">
                    <i style=" font-size:18px; margin-right: 5px;" class="fa-solid fa-right-from-bracket"></i>
                    <span>Đăng xuất</span>
                </a>
            </div>
        </div>
        <div class="right">
            <form action="process_edit_info.php" method="post">
                <div class="info">
                    <div class="item">
                        Họ tên:
                    </div> 
                    <div class="info_data">
                        <input type="text"
                            class="form-control" name="edit_fullname" id="edit_fullname" aria-describedby="helpId" placeholder="" value="<?php echo $user['HoTen']; ?>">
                    </div>
                </div>
                <div class="info">
                    <div class="item">
                        Ngày sinh:
                    </div> 
                    <div class="info_data">
                        <input type="text"
                            class="form-control" name="edit_ngaysinh" id="edit_ngaysinh" aria-describedby="helpId" placeholder="" value="<?php echo $user['NgaySinh']; ?>">
                    </div>
                </div>
                <div class="info">
                    <div class="item">
                        Giới tính:
                    </div> 
                    <div class="info_data">
                        <input type="text"
                            class="form-control" name="edit_gioitinh" id="edit_gioitinh" aria-describedby="helpId" placeholder="" value="<?php echo $user['GioiTinh']; ?>">
                    </div>
                </div>
                
                <div class="info">
                    <div class="item">
                        Địa chỉ:
                    </div> 
                    <div class="info_data">
                        <input type="text"
                            class="form-control" name="edit_diachi" id="edit_diachi" aria-describedby="helpId" placeholder="" value="<?php echo $user['DiaChi']; ?>">
                    </div>
                </div>
                <div class="info">
                    <div class="item">
                        Số điện thoại:
                    </div> 
                    <div class="info_data">
                        <input type="text"
                            class="form-control" name="edit_sdt" id="edit_sdt" aria-describedby="helpId" placeholder="" value="<?php echo $user['SoDienThoai']; ?>">
                    </div>
                </div>
                <div class="info">
                    <div class="item">
                        Password:
                    </div> 
                    <div class="info_data">
                        <input type="password"
                            class="form-control" name="edit_pass" id="edit_pass" aria-describedby="helpId" placeholder="" value="<?php echo $user['Password_user']; ?>">
                    </div>
                </div>
                
                <button style="margin-left: 100px; margin-top: 30px; background-color: red; border: none; width: 200px;" type="submit" class="btn btn-primary">Lưu thay đổi</button>
            </form>
        </div>
        <div class="img" style="width: 500px; margin-left: 200px;">
            <img style="width: 100%;" src="./../../Image/hotro/images.png" alt="">
        </div>
    </div>

    <br><br>
    <div class="info_page container-fluid">
        <div class="list_info">
            <ul>
               <h5> Hỗ trợ khách hàng</h5>
                <li>
                    <a href="#">
                        Trung tâm hỗ trợ khách hàng
                    </a>
                </li>
                <li>
                    <a href="#">
                        Chính sách giao hàng
                    </a>
                </li>
                <li>
                    <a href="#">
                        Chính sách thanh toán
                    </a>
                </li>
                <li>
                    <a href="#">
                        Chính sách đổi trả
                    </a>
                </li>
            </ul>
        </div>
        <div class="list_info">
            <ul>
               <h5> Về chúng tôi</h5>
                <li>
                    <a href="#">
                        Giới thiệu về Smart Mart
                    </a>
                </li>
                <li>
                    <a href="#">
                        Quản lý chất lượng
                    </a>
                </li>
                <li>
                    <a href="#">
                        Chính sách bảo mật
                    </a>
                </li>
                <li>
                    <a href="#">
                        Điều khoản và điều kiện giao dịch
                    </a>
                </li>
            </ul>
        </div>
        <div class="list_info">
            <ul>
               <h5> Chăm sóc khách hàng</h5>
                <li>
                    <a href="#">
                        Số điện thoại mua online
                    </a>
                </li>
                <li>
                    <a href="#">
                        Email
                    </a>
                </li>
            </ul>
        </div>
        <div class="info">
            <div class="logo">
                <a href="./../../home/home.php">
                    <img src="./../../Image/logo.png" alt="">
                </a>
            </div>
            <div class="text">
                Kết nối với chúng tôi
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter-square"></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>