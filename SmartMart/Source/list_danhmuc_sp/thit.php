<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./thit.css">
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
       
    </div>
    <hr class="container">
    <div class="container content">
        <div class="header_page">
            Danh mục sản phẩm 
            <i class="fas fa-chevron-right"></i>
            Thịt
        </div>
        <div class="header_item">
            Thịt Heo
        </div>
        <div class="item">
            <div class="list_item">
                <img src="./../Image/thit/thit_1.png" alt="">
                <div class="text">
                    MeatDeli Sụn heo cắt lát
                    <br>
                    ĐVT: 0.385 kg
                </div>
                <div class="money">
                   76.064 đ
                </div>
                <div class="show">
                    <a href="./../sanpham/sanpham.php">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_2.png" alt="">
                <div class="text">
                    MeatDeli Thịt nạc vai heo
                    <br>
                    ĐVT: 0.44 kg
                </div>
                <div class="money">
                    48.189 đ
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_3.png" alt="">
                <div class="text">
                    MeatDeli Thịt xay tươi ướp sẵn
                    <br>
                    ĐVT: 0.385 kg
                </div>
                <div class="money">
                    60.338 đ
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_4.png" alt="">
                <div class="text">
                    MeatDeli Thịt Nạc dăm đầu
                    <br>
                    ĐVT: 0.3 kg
                </div>
                <div class="money">
                    68.376 đ
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="show_content">
            <a href="#">
                Xem thêm sản phẩm Thịt Heo
                <i class="fas fa-caret-down"></i>
            </a>
        </div>
        <hr>
        <div class="header_item">
            Thịt Gà
        </div>
        <div class="item">
            <div class="list_item">
                <img src="./../Image/thit/thit_12.png" alt="">
                <div class="text">
                    MEATDELI Má đùi gà
                    <br>
                    ĐVT:0.5KG
                </div>
                <div class="money">
                    37.160 ₫
                </div>
                <div class="show">
                    <a href="./../sanpham/sanpham.php">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_13.png" alt="">
                <div class="text">
                    MEATDELI Cánh gà
                    <br>
                    ĐVT:0.5KG
                </div>
                <div class="money">
                    47.960 ₫
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_14.png" alt="">
                <div class="text">
                    MEATDELI Đùi gà tháo khớp
                    <br>
                    ĐVT:0.65KG
                </div>
                <div class="money">
                    56.628 ₫
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="list_item">
                <img src="./../Image/thit/thit_15.png" alt="">
                <div class="text">
                    MEATDELI Đùi gà rút xương
                    ĐVT:0.5KG
                </div>
                <div class="money">
                    57.560 ₫
                </div>
                <div class="show">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="show_content">
            <a href="#">
                Xem thêm sản phẩm Thịt Gà
                <i class="fas fa-caret-down"></i>
            </a>
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