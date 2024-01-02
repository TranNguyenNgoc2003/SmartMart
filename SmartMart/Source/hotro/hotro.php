<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./hotro.css">
</head>
<body>
<?php
    session_start();

    $user_email = $_SESSION['user_email'];
    $cmt ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sieuthi";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_errno) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        // Lấy MaKH từ bảng KhachHang dựa trên email của người dùng
        $sql_get_makh = "SELECT MaKH FROM KhachHang WHERE EMAIL LIKE '$user_email'";
        $result = $conn->query($sql_get_makh);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $MaKH = $row["MaKH"];

            // Chèn vào bảng CommentPage
            $Report = $_POST["txtReport"];
            $ReComment = $_POST["txtReComment"];

            $sql_insert_comment = "INSERT INTO CommentPage (MaKH, idReport, ReComment) VALUES ('$MaKH', '$Report', '$ReComment')";

            if ($conn->query($sql_insert_comment) === TRUE) {
                $cmt = "Cảm ơn quý khách đã phản hồi. <br> Chúng tôi sẽ liên hệ để hỗ trợ quý khách trong thời gian sớm nhất";
            } else {
                echo "Lỗi: " . $sql_insert_comment . "<br>" . $conn->error;
            }
        } else {
            echo "Không tìm thấy thông tin khách hàng";
        }

        $conn->close();
    }
?>

    <div class="container header">
        <div class="logo">
            <div class="img_logo">
                <a href="./../home/home.php">
                    <img src="./../Image/logo.png" alt="">
                </a>
            </div>
            <div class="name_logo">
                <h3>
                    <a href="./../home/home.php">Smart Mart</a>
                </h3>
            </div>
        </div>
        <form class="search" action="./../search/search.php" method="POST">
            <input style="height: 30px; width: 170px;" type="text" class="form-control" name="txtSearch" id="txtSearch" aria-describedby="helpId" placeholder="Nhập tên sản phẩm">
            <button style="height: 30px; font-size: 12px; margin-left: 10px; " type="submit" class="btn btn-danger">Search</button>
        </form>
        <div class="user_name d-none d-md-inline-block">
            <a href="./../user/info/user.php">
                <i class="fas fa-user"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="container menu_bar">
        <div class="item_menu">
            <div class="list_menu"  id="item_1" style="border: none;">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="./../list_danhmuc_sp/thit.php">Thịt</a>
                    <a class="dropdown-item" href="./../list_danhmuc_sp/hai_san.php">Hải sản</a>
                </div>
            </div>
            <div class="list_menu" id="item_1" style="width: 70px;">
                <a style="text-decoration: none;" href="./../tintuc/tintuc.php">Tin tức</a>
            </div>
            <div class="list_menu" id="item_1" style="width: 70px;">
               <a style="text-decoration: none;" href="./../hotro/hotro.php">Hỗ trợ</a>
            </div>
            <div class="list_menu" id="item_1" >
                <a style="text-decoration: none;" href="./../dichvu/dichvu.php">Dịch vụ hỗ trợ</a>
             </div>
        </div>
       
    </div>
    </div>
    <hr class="container">
    <div class="container header_content" style="font-size: 20px; font-weight: 500;">
        Trung tâm hỗ trợ khách hàng
    </div>
    <hr class="container">

    <div class="content">
        <div class="content_left">
            <div class="header_top" style="font-size: 18px">
                <b>Smart Mart</b>
                <br>
                Xin hân hạnh được hỗ trợ quý khách
            </div>
            <hr style="width: 350px;">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div>
                <div class="mb-3">
                    <labe style="font-size: 18px;" for="" class="form-label">Vấn đề cần hỡ trợ</labe>
                    <select class="form-select form-select-lg" style="font-size: 16px; width: 250px;" name="txtReport" id="txtReport">
                        <option selected>Hãy chọn vấn đề cần hỗ trợ</option>
                        <option value="1">Tư vấn mua hàng</option>
                        <option value="2">Thái độ phục vụ</option>
                        <option value="3">Chất lượng sản phẩm</option>
                        <option value="4">Vấn đề khác</option>
                    </select>
                </div>
                <div class="mb-3" style="width: 250px;">
                  <label for="" class="form-label">Nội dung</label>
                  <input type="text"
                    class="form-control" name="txtReComment" id="txtReComment" aria-describedby="helpId" placeholder="Xin Quý khách mô tả chi tiết">
                </div>
                <div style="width: 350px; padding-bottom: 10px; font-size: 14px; color: red;">
                    <?php 
                        echo $cmt;
                    ?>
                </div>
                </div>
                <button type="submit" style="width: 200px; margin-left: 25px; background-color: red; border: none;" class="btn btn-primary">Gửi</button>
            </form>    
        </div>

        <div class="content_right d-none d-md-inline-block ">
            <div class="header_info">
                Thông tin liên hệ khác
            </div>
            <div class="text_info">
                Tìm siêu thị <b>Smart Mart</b>? Xin mời ghé thăm trang Tìm siêu thị để xem bản đồ và địa chỉ các siêu thị trên toàn quốc.
                <br>
                Mọi ý kiến đóng góp, vui lòng liên hệ qua email: tarus.sys@gmail.com
            </div>
            <div class="header_info">
                Thông tin Công Ty
            </div>
            <div class="text_info">
                <b>CÔNG TY TNHH SMART MART</b>. 
                <br>
                Địa chỉ: Số 34 đường Lý Thái Tổ , Phường Ninh Xá, Thành phố Bắc Ninh, Tỉnh Bắc Ninh, Việt Nam.
            </div>
            <div class="img_info">
                <img src="./../Image/hotro/images.png" alt="">
            </div>
        </div>
    </div>
    <br>
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
                <a href="./../home/home.php">
                    <img src="./../Image/logo.png" alt="">
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