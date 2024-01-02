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
    $dbname = "dacn";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM userdata WHERE user_email='$user_email'";
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
    <title>Nihongo Mastery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./user.css">
</head>
<body>
    <div class="container header">
        <div class="logo">
            <div class="img_logo">
                <a href="./../../home.php">
                    <img src="./../../image/Nihongo_Master_Logo.png" alt="">
                </a>
            </div>
            
        </div>
        <form class="search" action="#" method="POST">
            <input style="height: 30px; width: 170px;" type="text" class="form-control" name="txtSearch" id="txtSearch" aria-describedby="helpId" placeholder="Hãy nhập từ khóa">
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
            <a style="text-decoration: underline; color: red;" href="./../info/user.php" class="item_header">
                Thông tin tài khoản
            </a>
        </div>
        <div class="edit_info" id="item">
            <a href="./../edit_info/edit_info.php" class="item_header">
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
            <div class="info">
                <div class="item">
                    Họ tên:
                </div> 
                <div class="info_data">
                    <?php echo $user['user_name']; ?>
                </div>
            </div>
            <div class="info">
                <div class="item">
                    Ngày sinh:
                </div> 
                <div class="info_data">
                    <?php echo $user['NgaySinh']; ?>
                </div>
            </div>
            <div class="info">
                <div class="item">
                    Giới tính:
                </div> 
                <div class="info_data">
                    <?php echo $user['GioiTinh']; ?>
                </div>
            </div>
            <div class="info">
                <div class="item">
                    Địa chỉ:
                </div> 
                <div class="info_data">
                    <?php echo $user['DiaChi']; ?>
                </div>
            </div>
            <div class="info">
                <div class="item">
                    Số điện thoại:
                </div> 
                <div class="info_data">
                    <?php echo $user['user_phone']; ?>
                </div>
            </div>
            <div class="info">
                <div class="item">
                    Email:
                </div> 
                <div class="info_data">
                    <?php echo $user['user_email']; ?>
                </div>
            </div>
        </div>
        <div class="img" style="width: 500px; margin-left: 222px;">
            <img style="width: 80%;" src="./../../image/images.png" alt="">
        </div>
    </div>

    <br><br>
    <!-- Comment -->
    <div class="container-fluid Information">
        <div class="row">
            <div class="col-2 infocomment">
                <div class="logo">
                    <a href="#">
                        <img src="./../../image/Nihongo_Master_Logo.png" style="width: 80px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col-7 infocomment" style="text-align: start;">
                <div class="item_info">
                    Địa chỉ: Phường Hòa Hiệp Nam, Quận Liên Chiểu, TP Đà Nẵng
                </div>
                <div class="item_info">
                    Điện thoại: 086 692 6448
                </div>
                <div class="item_info">
                    Email: 3120221232@ued.udn.vn
                </div>
                <div class="item_info">
                    Website: http://NihongoMastery.com
                </div>
            </div>
            <div class="col-3">
                <div style="display: flex; margin: auto;  width: 120px; justify-content: space-between;">
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-instagram-square"></i>
                        </a>
                    </div>
                </div>
                <div style="width: 150px; margin: 0 auto;">
                    <select class="form-select form-select-lg " name="" id="" style="font-size: 14px;">
                        <option value="vn" selected>Vietnamese</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
            <div class="logo_bar">
                <img src="./../../image/image_bg/Bar background.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>