<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sieuthi";

    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $result = null;
    $productName = "";
    $text_cmt = "";
    $TenHH = "";
    $Gia = "";
    $ImgSp = "";
    $DVT = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy truy vấn tìm kiếm từ biểu mẫu
        $productName = $_POST['txtSearch'];

        // Kiểm tra xem có giá trị nhập vào hay không
        if (!empty($productName)) {
            // Thực hiện truy vấn SQL để tìm kiếm sản phẩm
            $query = "SELECT * FROM QuanLyHangHoa WHERE TenHH LIKE ?";
            $stmt = $conn->prepare($query);

            if (!empty($productName)) {
                $productName = "%" . $productName . "%";
                $stmt->bind_param("s", $productName);
                $stmt->execute();

                // Lấy và hiển thị kết quả
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $text_cmt = "<h2>Kết quả tìm kiếm: '$productName'</h2>";

                } else {
                    $text_cmt = "<p>Không có kết quả phù hợp.</p>";
                }

                $stmt->close();
            } else {
                $text_cmt = "Lỗi truy vấn: " . $conn->error;
            }
        } else {
            $text_cmt = "<p>Vui lòng nhập từ khóa tìm kiếm.</p>";
        }
    } else {
        // Hiển thị thông báo nếu biểu mẫu không được gửi
        echo "Nhập truy vấn tìm kiếm.";
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
    <link rel="stylesheet" href="./search.css">
</head>
<body>
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
    <hr class="container">
    <div class="container content">
        <div class="header_page">
            <?php echo $text_cmt; ?>
        </div>
        
        <div class="item" style="display: <?php echo (!is_null($result) && $result->num_rows > 4) ? 'flex' : 'none'; ?>; justify-content: space-between;">
            <?php $count = 0; ?>
            <?php if (!is_null($result)): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php $TenHH = $row['TenHH']; ?>
                    <?php $Gia = $row['Gia']; ?>
                    <?php $ImgSp = $row['ImgSP']; ?>
                    <?php $DVT = $row['DVT']; ?>
                    <div class="list_item">
                        <img src="<?php echo $ImgSp; ?>" alt="">
                        <div class="text">
                            <?php echo $TenHH; ?>
                            <br>
                            ĐVT: <?php echo $DVT; ?>
                        </div>
                        <div class="money">
                            <?php echo $Gia; ?> đ
                        </div>
                        <div class="show">
                            <a href="./../sanpham/sanpham.php">Xem thêm</a>
                        </div>
                    </div>
                    <?php if (++$count === 4): ?>
                        <?php $count = 0; ?>
                        <?php if (!is_null($result) && $result->num_rows > 4): ?>
                            </div><div class="item" style="display: flex; justify-content: space-between;">
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
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