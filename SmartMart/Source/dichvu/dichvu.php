<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./dichvu.css">
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
    <div class="container content" style="display: flex;">
        <div class="left w-75">
            <div class="header_content" style=" width: 200px; text-align: center; padding: 10px 20px 7px 20px; background-color: red; color: white; border-radius: 16px; ">
                <h3>Smart Mart</h3>
            </div>
            <div class="text_content" style="margin-top: 20px;">
                <div style="font-size: 18px; font-weight: bold;">Hệ thống siêu thị Smart Mart</div>
                Tổng đài CSKH: 1900.5555.68 <br>
                Email: chamsockhachhang@smartmart.vn <br>
                <br>
                <div style="font-size: 18px; font-weight: bold;">Trụ sở chính:</div>
                <div style="font-size: 16px; font-weight: bold;">CÔNG TY TNHH SMART MART</div>
                Số 34 đường Lý Thái Tổ , Phường Ninh Xá, Thành phố Bắc Ninh, Tỉnh Bắc Ninh, Việt Nam. <br>
                Điện thoại: (028) 38.360.143 - Fax: (028) 38.370.560 <br>
                Website: http://www.smartmart.com.vn
            </div>
    
            <div class="item_info_page" style="display: flex; margin-top: 30px;">
                <div class="item_fb">
                    <a href="#" class="icon" style="display: flex; color: black; text-decoration: none;">
                        <i class="fa-brands fa-facebook" style="color: blue; font-size: 70px;"></i>
                        <div class="text" style="margin: 10px 0px 10px 20px;  border: 2px solid red; border-radius: 36px; padding: 10px;">
                            <div >Chúng tôi trên Facebook</div>
                        </div>
                    </a>
                    <div style="margin-top: 10px; text-align: center; text-decoration: underline;">Smart Mart - Bạn của mọi nhà</div>
                    
                </div>
                <div class="item_zalo" style="margin-left: 100px;">
                    <a href="#" class="icon" style="display: flex; color: black; text-decoration: none;">
                        <img src="./../Image/Icon_of_Zalo.png" style="width: 70px;" alt="">
                        <div style="margin-top: 20px; margin-left: 20px;" >Liên hệ: 0987654321</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right w-50 d-none d-md-inline-block">
            <img src="./../Image/hotro/images.png" style="width: 100%;" alt="">
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