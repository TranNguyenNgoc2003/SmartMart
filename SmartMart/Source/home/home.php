<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
    <div class="container header">
        <div class="logo">
            <div class="img_logo">
                <a href="./home.php">
                    <img src="./../Image/logo.png" alt="">
                </a>
            </div>
            <div class="name_logo">
                <h3>
                    <a href="./home.php">Smart Mart</a>
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
    <div id="carouselId" class="carousel slide" style="width: 50%; margin:20px auto;" data-bs-ride="carousel">
        <ol class="carousel-indicators" style="list-style: none;">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./../Image/Slide/Slide_1.jpg" style="width: 100%;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="./../Image/Slide/Slide_2.jpg" style="width: 100%;"  alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="./../Image/Slide/Slide_3.jpg" style="width: 100%;"  alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col" id="content_left">
                <div class="list_content">
                    <div class="header_content">
                        <h3>Thịt - hải sản tươi</h3>
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
                            <a href="./../sanpham/sanpham.php">Xem thêm</a>
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
                            <a href="./../sanpham/sanpham.php">Xem thêm</a>
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
                            <a href="./../sanpham/sanpham.php">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="show_content">
                        <a href="./../list_danhmuc_sp/thit.php">
                            Xem thêm sản phẩm Thịt - Hải sản tươi
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="list_content">
                    <div class="header_content">
                        <h3>Rau - Củ - Trái cây</h3>
                    </div>
                    <div class="item">
                        <div class="list_item">
                            <img src="./../Image/qua/qua_1.png" alt="">
                            <div class="text">
                                Bưởi hồng da xanh
                                <br>
                                ĐVT: 1.5KG
                            </div>
                            <div class="money">
                                70.350 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/qua/qua_2.png" alt="">
                            <div class="text">
                                Bí ngòi xanh
                                <br>
                                ĐVT: 1KG
                            </div>
                            <div class="money">
                                35.920 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/qua/qua_3.png" alt="">
                            <div class="text">
                                Táo Koru New Zealand
                                <br>
                                ĐVT: 1KG
                            </div>
                            <div class="money">
                                74.900 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/qua/qua_4.png" alt="">
                            <div class="text">
                                Mận An Phước
                                <br>
                                ĐVT: 1 KG
                            </div>
                            <div class="money">
                                59.900 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="show_content">
                        <a href="#">
                            Xem thêm sản phẩm Rau - Củ - Trái cây
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="list_content">
                    <div class="header_content">
                        <h3>Bột giặt - Dầu xả</h3>
                    </div>
                    <div class="item">
                        <div class="list_item">
                            <img src="./../Image/nuoc giat/ariel-1.png" alt="">
                            <div class="text">
                                Nước giặt Ariel
                                <br>
                                ĐVT: 3.1 Lít
                            </div>
                            <div class="money">
                                240.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc giat/ariel-2.png" alt="">
                            <div class="text">
                                Nước giặt Ariel
                                <br>
                                ĐVT: 3.1 Lít
                            </div>
                            <div class="money">
                                240.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc giat/ariel-3.png" alt="">
                            <div class="text">
                                Nước giặt Ariel
                                <br>
                                ĐVT: 3.1 Lít
                            </div>
                            <div class="money">
                                240.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc giat/ariel-4.png" alt="">
                            <div class="text">
                                Nước giặt Ariel
                                <br>
                                ĐVT: 3.1 Lít
                            </div>
                            <div class="money">
                                240.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="show_content">
                        <a href="#">
                            Xem thêm sản phẩm Bột giặt - Dầu xả
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="list_content">
                    <div class="header_content">
                        <h3>Nước uống - Giải khát</h3>
                    </div>
                    <div class="item">
                        <div class="list_item">
                            <img src="./../Image/nuoc/nuoc_1.png" alt="">
                            <div class="text">
                                Nước ngọt Pepsi
                                <br>
                                ĐVT: 1 thùng
                            </div>
                            <div class="money">
                                240.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc/nuoc_5.png" alt="">
                            <div class="text">
                                Nước ngọt Mirinda
                                <br>
                                ĐVT: 1 thùng
                            </div>
                            <div class="money">
                                200.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc/nuoc_7.png" alt="">
                            <div class="text">
                                Nước ngọt Sting
                                <br>
                                ĐVT: 1 thùng
                            </div>
                            <div class="money">
                                220.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list_item">
                            <img src="./../Image/nuoc/nuoc_8.png" alt="">
                            <div class="text">
                                Nước ngọt Pepsi
                                <br>
                                ĐVT: 12 chai
                            </div>
                            <div class="money">
                                180.000 đ
                            </div>
                            <div class="show">
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="show_content">
                        <a href="#">
                            Xem thêm sản phẩm Nước uống - Giải khát
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-none d-md-inline-block" id="content_right">
                <div class="list_menu">
                    <div class="header_menu">
                        <h3>Menu</h3>
                    </div>
                    <hr>
                    <ol class="item_menu">
                        <li>
                            <a href="#">
                                Thịt - hải sản tươi
                            </a>
                            <ul>
                                <li>
                                    <a href="./../list_danhmuc_sp/thit.php">
                                        Thịt
                                    </a>
                                </li>
                                <li>
                                    <a href="./../list_danhmuc_sp/hai_san.php">
                                        Hải sản
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Rau củ - trái cây
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Rau
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Củ quả
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Trái cây tươi
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Sữa các loại
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Sữa tươi
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sữa hạt
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sữa bột
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Bánh kẹo
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Bánh quy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Kẹo
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Snack
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Đồ uống - giải khát
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Cà phê
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Nước suối
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Nước ngọt
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Trà
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Mì - thực phẩm ăn liền
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Mì
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Miến - Hủ tiếu
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Cháo
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Phở - Bún
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Gia vị
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Dầu ăn
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Đường - Hạt nêm
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Nước mắm
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Nước tương
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Hoá phẩm tẩy rửa
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Nước giặt - Lau sàn
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bình xịt côn trùng
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ol>
                </div>
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
                <a href="./home.php">
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