<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./sanpham.css">
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
        <div class="img_sp">
            <img src="./../Image/thit/thit_1.png" alt="">
        </div>
        <div class="info">
            <div class="header_sp">
                MEATDELI [PRE] Thịt nạc vai heo
            </div>
            <div class="id_sp">
                <span style="text-decoration: underline;">SKU:</span> 10617963
            </div>
            <div class="info_sp">
                <div class="name_info">
                    <div>Chọn loại</div>
                    <div style="margin-top: 100px;">Tình trạng</div>
                </div>
                <div class="form_info">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="one-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="" aria-selected="true">0.385 kg</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="two-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="" aria-selected="false">0.5 kg</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="three-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="" aria-selected="false">1 kg</button>
                      </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content" style="background-color: white; padding: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                      <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="text">
                                <div class="left">
                                    <div class="header_info">
                                        Giá niêm yết:
                                    </div>
                                    <div class="monney">
                                        90.544 đ
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="header_info">
                                        Giá khuyến mãi:
                                    </div>
                                    <div class="monney">
                                        76.064 đ
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="cmt">
                                Hết hàng
                            </div>
                      </div>
                      <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="text">
                            <div class="left">
                                <div class="header_info">
                                    Giá niêm yết:
                                </div>
                                <div class="monney">
                                    120.544 đ
                                </div>
                            </div>
                            <div class="right">
                                <div class="header_info">
                                    Giá khuyến mãi:
                                </div>
                                <div class="monney">
                                    95.064 đ
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="cmt">
                            Còn hàng
                        </div>
                      </div>
                      <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="text">
                                <div class="left">
                                    <div class="header_info">
                                        Giá niêm yết:
                                    </div>
                                    <div class="monney">
                                        200.564 đ
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="header_info">
                                        Giá khuyến mãi:
                                    </div>
                                    <div class="monney">
                                        150.864 đ
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="cmt">
                                Tạm hết hàng
                            </div>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>

        
    </div>
    <hr class="container">
    <div class="container show_infomation">
        <div class="left">
            <div class="header_info">
                Mô Tả
            </div>
            <div class="text">
                <b style="margin-left: -20px;">MEATDELI [PRE] Thịt nạc vai heo</b>
                <br>
                MEATDELI [PRE] Thịt nạc vai heo giữ trọn vị tươi ngọt của thịt với tỉ lệ 90% nạc-10% mỡ, phù hợp với người thích ăn ít mỡ và nấu các món ăn thanh mát. Thịt nạc heo ngon được sơ chế theo công nghệ hiện đại, đảm bảo độ tươi sạch và giữ trọn vị ngọt thịt tự nhiên.
                <br>
                <b style="margin-left: -20px;">Hướng dẫn sử dụng:</b>
                <br>
                Dùng làm nguyên liệu chế biến các món ăn: nấu canh, làm thịt xiên, xá xíu, súp, nhồi khổ qua...

            </div>
        </div>
        <div class="right">
            <div class="header_info">
                Thông tin
            </div>
            <div class="text">
                <div class="header_item">
                    Xuất xứ:
                </div>
                <div class="item_text">
                    Việt Nam
                </div>
            </div>
            <div class="text">
                <div class="header_item">
                    Bảo quản:
                </div>
                <div class="item_text">
                    Bảo quản ở nhiệt độ 0-4 độ C
                </div>
            </div>
            <div class="text" style="border:none;">
                <div class="header_item">
                    Khối Lượng:
                </div>
                <div class="item_text">
                    0.385 kg; 0.5 kg; 1 kg
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