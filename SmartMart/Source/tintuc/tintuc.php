<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./tintuc.css">
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
        <div class="header_text">
            <h3>Giới thiệu về Smart Mart</h3>
        </div>
        <div class="text">
            Smart Mart là một chuỗi cửa hàng bán lẻ thông minh hoạt động dựa trên công nghệ và trí tuệ nhân tạo. Smart Mart kết hợp các yếu tố của cửa hàng truyền thống với công nghệ tiên tiến để tạo ra trải nghiệm mua sắm tiện lợi và thông minh cho khách hàng.
            
        </div>
        <div class="text">
            Smart Mart sử dụng hệ thống cảm biến và công nghệ nhận dạng để theo dõi sản phẩm và khách hàng trong cửa hàng. Khách hàng có thể sử dụng ứng dụng di động hoặc thiết bị đeo thông minh để tạo một tài khoản và kết nối với hệ thống của Smart Mart. Khi khách hàng vào cửa hàng, hệ thống sẽ nhận dạng họ và theo dõi sản phẩm mà họ chọn.
        </div>
        <div class="img_gt">
            <img src="./../Image/tintuc/Driving through SmartMart.png" alt="">
        </div>
        <div class="text">
            Smart Mart cung cấp một trải nghiệm mua sắm tự động và không cần thu ngân. Khách hàng có thể chọn sản phẩm bằng cách quét mã vạch hoặc sử dụng công nghệ nhận dạng thị giác. Hệ thống sẽ tự động cập nhật giỏ hàng và tính toán tổng số tiền mà khách hàng cần thanh toán. Khi khách hàng rời khỏi cửa hàng, hệ thống tự động trừ tiền từ tài khoản của khách hàng và gửi hóa đơn qua ứng dụng di động hoặc email.
        </div>
        <div class="img_gt">
            <img src="./../Image/tintuc/01-Avanti-Market-View.jpg" alt="">
        </div>
        <div class="text">
            Ngoài ra, Smart Mart cũng sử dụng trí tuệ nhân tạo để phân tích dữ liệu khách hàng và đưa ra các đề xuất sản phẩm cá nhân hóa. Hệ thống có thể gợi ý sản phẩm dựa trên lịch sử mua hàng và sở thích của khách hàng, tạo ra trải nghiệm mua sắm cá nhân và tiết kiệm thời gian.
            
        </div>
        <div class="text">
            Smart Mart đang phát triển và mở rộng mạng lưới cửa hàng trên toàn quốc và trên thế giới. Mục tiêu của Smart Mart là mang đến cho khách hàng một trải nghiệm mua sắm tiện lợi, thông minh và đáng tin cậy.
            
        </div>
        <div class="img_gt">
            <img src="./../Image/tintuc/tri-tue-nhan-tao-AI-2.jpg" alt="">
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