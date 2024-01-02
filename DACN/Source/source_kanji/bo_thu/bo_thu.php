<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="bo_thu.css">
</head>
<body>
    <div class="container-xl">
        <!-- Logo -->
        <div class="row ">
            <div class="col bar">
                <div class="logo">
                    <a href="#">
                        <img src="./../../image/Nihongo_Master_Logo.png" style="width: 50px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end bar">
                <div class="login_search" style="margin-top: 11px; ">
                    <a href="#" style="color: black; font-size: 20px; margin-right: 20px;"><i class="fas fa-search"></i></a>
                    <a href="./../../user/info/user.php" style="color: black;font-size: 20px;"><i class="fas fa-user"></i></a>

                </div>
            </div>
        </div>
        <!-- Menu Bar -->
        <div class="row menu">
            <div class="col">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Trang_Chu-tab" data-bs-toggle="tab" data-bs-target="#Trang_Chu" type="button" role="tab" aria-controls="Trang_Chu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../home.php">Trang Chủ</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../source_tai_lieu/tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../bo_thu/bo_thu.php">Hán Tự</a>
                            </span>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                        <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../source_JLPT/JLPT_Test.php">JLPT</a>
                            </span>
                        </button>
                    </li>
                </ul>
                
            </div>
            
            
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Han Tu -->
            <div class="tab-pane active" id="Han_Tu" role="tabpanel" aria-labelledby="Han_Tu-tab">
                <div class="menu_bar">
                    <ul>
                        <li class="nav-item dropdown">
                            <a href="./bo_thu.php" style="color: navy;">214 bộ thủ</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kanji</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../kanji/kanjiN5.php">N5</a>
                                <a class="dropdown-item" href="./../kanji/kanjiN4.php">N4</a>
                                <a class="dropdown-item" href="./../kanji/kanjiN3.php">N3</a>
                                <a class="dropdown-item" href="./../kanji/kanjiN2.php">N2</a>
                                <a class="dropdown-item" href="./../kanji/kanjiN1.php">N1</a>

                            </div>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">
                <!-- Content -->
                
                <div class="content  ">
                    <h4 style="margin: 20px 0px 20px 30px; font-weight: bold;">Bộ thủ Kanji cơ bản BẮT BUỘC phải nhớ
                    </h4>
                    <ul>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                <b>STT</b>
                            </div>
                            <div class="Bo">
                                Bộ
                            </div>
                            <div class="am_han">
                                <b>Âm hán</b>
                            </div>
                            <div class="y_nghia">
                                <b>Ý nghĩa</b>
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                1
                            </div>
                            <div class="Bo">
                                一
                            </div>
                            <div class="am_han">
                                Nhất
                            </div>
                            <div class="y_nghia">
                                Số 1
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                2
                            </div>
                            <div class="Bo">
                                〡
                            </div>
                            <div class="am_han">
                                Cổn
                            </div>
                            <div class="y_nghia">
                                Nét sổ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                3
                            </div>
                            <div class="Bo">
                                丶
                            </div>
                            <div class="am_han">
                                Chủ
                            </div>
                            <div class="y_nghia">
                                Phẩy
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                4
                            </div>
                            <div class="Bo">
                                丿
                            </div>
                            <div class="am_han">
                                Phiệt
                            </div>
                            <div class="y_nghia">
                                Nét chéo
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                5
                            </div>
                            <div class="Bo">
                                乙
                            </div>
                            <div class="am_han">
                                Ất
                            </div>
                            <div class="y_nghia">
                                Vị trí thứ 2 trong liên can
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                6
                            </div>
                            <div class="Bo">
                                亅 
                            </div>
                            <div class="am_han">
                                Quyết
                            </div>
                            <div class="y_nghia">
                                Nét sổ móc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                7
                            </div>
                            <div class="Bo">
                                二
                            </div>
                            <div class="am_han">
                                Nhị
                            </div>
                            <div class="y_nghia">
                                Số hai
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                8
                            </div>
                            <div class="Bo">
                                亠 
                            </div>
                            <div class="am_han">
                                Đầu
                            </div>
                            <div class="y_nghia">
                                Phần trên cùng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                9
                            </div>
                            <div class="Bo">
                                亻
                            </div>
                            <div class="am_han">
                                Nhân đứng
                            </div>
                            <div class="y_nghia">
                                Người
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                10
                            </div>
                            <div class="Bo">
                                𠆢
                            </div>
                            <div class="am_han">
                                Nhân nằm
                            </div>
                            <div class="y_nghia">
                                Người
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                11
                            </div>
                            <div class="Bo">
                                儿 
                            </div>
                            <div class="am_han">
                                Nhi
                            </div>
                            <div class="y_nghia">
                                Trẻ con
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                12
                            </div>
                            <div class="Bo">
                                入
                            </div>
                            <div class="am_han">
                                Nhập
                            </div>
                            <div class="y_nghia">
                                Vào
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                13
                            </div>
                            <div class="Bo">
                                八
                            </div>
                            <div class="am_han">
                                Bát
                            </div>
                            <div class="y_nghia">
                                Số 8
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                14
                            </div>
                            <div class="Bo">
                                冂
                            </div>
                            <div class="am_han">
                                Quynh
                            </div>
                            <div class="y_nghia">
                                Đất hoang
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                15
                            </div>
                            <div class="Bo">
                                冖
                            </div>
                            <div class="am_han">
                                Mịch
                            </div>
                            <div class="y_nghia">
                                Trùm lên
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                16
                            </div>
                            <div class="Bo">
                                冫
                            </div>
                            <div class="am_han">
                                Băng
                            </div>
                            <div class="y_nghia">
                                Nước đá
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                17
                            </div>
                            <div class="Bo">
                                几
                            </div>
                            <div class="am_han">
                                Kỷ
                            </div>
                            <div class="y_nghia">
                                Ghế dựa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                18
                            </div>
                            <div class="Bo">
                                凵
                            </div>
                            <div class="am_han">
                                Khảm
                            </div>
                            <div class="y_nghia">
                                Há miệng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                19
                            </div>
                            <div class="Bo">
                                力
                            </div>
                            <div class="am_han">
                                Lực
                            </div>
                            <div class="y_nghia">
                                Sức mạnh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                20
                            </div>
                            <div class="Bo">
                                刂
                            </div>
                            <div class="am_han">
                                Đao
                            </div>
                            <div class="y_nghia">
                                Cây dao, con dao
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                21
                            </div>
                            <div class="Bo">
                                勹 
                            </div>
                            <div class="am_han">
                                Bao
                            </div>
                            <div class="y_nghia">
                                Bao bọc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                22
                            </div>
                            <div class="Bo">
                                匕
                            </div>
                            <div class="am_han">
                                Chuỷ
                            </div>
                            <div class="y_nghia">
                                Cái thìa (cái muỗng)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                23
                            </div>
                            <div class="Bo">
                                匚
                            </div>
                            <div class="am_han">
                                Phương
                            </div>
                            <div class="y_nghia">
                                Tủ đựng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                24
                            </div>
                            <div class="Bo">
                                匸
                            </div>
                            <div class="am_han">
                                Hệ
                            </div>
                            <div class="y_nghia">
                                Che đậy, giấu diếm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                25
                            </div>
                            <div class="Bo">
                                十
                            </div>
                            <div class="am_han">
                                Thập
                            </div>
                            <div class="y_nghia">
                                Số 10
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                26
                            </div>
                            <div class="Bo">
                                卜
                            </div>
                            <div class="am_han">
                                Bốc
                            </div>
                            <div class="y_nghia">
                                Xem bói
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                27
                            </div>
                            <div class="Bo">
                                卩
                            </div>
                            <div class="am_han">
                                Tiết
                            </div>
                            <div class="y_nghia">
                                Đốt tre
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                28
                            </div>
                            <div class="Bo">
                                厂 
                            </div>
                            <div class="am_han">
                                Hán
                            </div>
                            <div class="y_nghia">
                                Vách đá, sườn núi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                29
                            </div>
                            <div class="Bo">
                                厶
                            </div>
                            <div class="am_han">
                                Tư
                            </div>
                            <div class="y_nghia">
                                Cá nhân, riêng tư
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                30
                            </div>
                            <div class="Bo">
                                又 
                            </div>
                            <div class="am_han">
                                Hựu
                            </div>
                            <div class="y_nghia">
                                Lần nữa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                31
                            </div>
                            <div class="Bo">
                                口
                            </div>
                            <div class="am_han">
                                Khẩu
                            </div>
                            <div class="y_nghia">
                                Miệng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                32
                            </div>
                            <div class="Bo">
                                囗 
                            </div>
                            <div class="am_han">
                                Vi
                            </div>
                            <div class="y_nghia">
                                Vây quanh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                33
                            </div>
                            <div class="Bo">
                                士
                            </div>
                            <div class="am_han">
                                Sĩ
                            </div>
                            <div class="y_nghia">
                                Kẻ sĩ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                34
                            </div>
                            <div class="Bo">
                                夊
                            </div>
                            <div class="am_han">
                                Trĩ
                            </div>
                            <div class="y_nghia">
                                Từ sau, phía sau
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                35
                            </div>
                            <div class="Bo">
                                夊
                            </div>
                            <div class="am_han">
                                Truy
                            </div>
                            <div class="y_nghia">
                                Đi chậm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                36
                            </div>
                            <div class="Bo">
                                夕
                            </div>
                            <div class="am_han">
                                Tịch
                            </div>
                            <div class="y_nghia">
                                Đêm tối
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                37
                            </div>
                            <div class="Bo">
                                大
                            </div>
                            <div class="am_han">
                                Đại
                            </div>
                            <div class="y_nghia">
                                To lớn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                38
                            </div>
                            <div class="Bo">
                                女
                            </div>
                            <div class="am_han">
                                Nữ
                            </div>
                            <div class="y_nghia">
                                Nữ giới, phụ nữ, con gái
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                39
                            </div>
                            <div class="Bo">
                                子
                            </div>
                            <div class="am_han">
                                Tử
                            </div>
                            <div class="y_nghia">
                                Con
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                40
                            </div>
                            <div class="Bo">
                                宀
                            </div>
                            <div class="am_han">
                                Miên
                            </div>
                            <div class="y_nghia">
                                Mái nhà
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                41
                            </div>
                            <div class="Bo">
                                寸
                            </div>
                            <div class="am_han">
                                Thốn
                            </div>
                            <div class="y_nghia">
                                Tấc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                42
                            </div>
                            <div class="Bo">
                                小
                            </div>
                            <div class="am_han">
                                Tiểu
                            </div>
                            <div class="y_nghia">
                                Nhỏ bé
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                43
                            </div>
                            <div class="Bo">
                                尢
                            </div>
                            <div class="am_han">
                                Uông
                            </div>
                            <div class="y_nghia">
                                Yếu đuối
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                44
                            </div>
                            <div class="Bo">
                                尸
                            </div>
                            <div class="am_han">
                                Thi
                            </div>
                            <div class="y_nghia">
                                Xác chết, thây ma
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                45
                            </div>
                            <div class="Bo">
                                屮
                            </div>
                            <div class="am_han">
                                Triệt
                            </div>
                            <div class="y_nghia">
                                Mầm non, cỏ non mới mọc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                46
                            </div>
                            <div class="Bo">
                                山
                            </div>
                            <div class="am_han">
                                Sơn
                            </div>
                            <div class="y_nghia">
                                Núi non
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                47
                            </div>
                            <div class="Bo">
                                巛
                            </div>
                            <div class="am_han">
                                Xuyên
                            </div>
                            <div class="y_nghia">
                                Sông ngòi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                48
                            </div>
                            <div class="Bo">
                                工
                            </div>
                            <div class="am_han">
                                Công
                            </div>
                            <div class="y_nghia">
                                Người thợ, công việc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                49
                            </div>
                            <div class="Bo">
                                己
                            </div>
                            <div class="am_han">
                                Kỷ
                            </div>
                            <div class="y_nghia">
                                Bản thân mình
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                50
                            </div>
                            <div class="Bo">
                                巾
                            </div>
                            <div class="am_han">
                                Cân
                            </div>
                            <div class="y_nghia">
                                Cái khăn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                51
                            </div>
                            <div class="Bo">
                                干
                            </div>
                            <div class="am_han">
                                Can
                            </div>
                            <div class="y_nghia">
                                Thiên can, can dự
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                52
                            </div>
                            <div class="Bo">
                                幺
                            </div>
                            <div class="am_han">
                                Yêu
                            </div>
                            <div class="y_nghia">
                                Nhỏ nhắn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                53
                            </div>
                            <div class="Bo">
                                广
                            </div>
                            <div class="am_han">
                                Nghiễm
                            </div>
                            <div class="y_nghia">
                                Mái nhà
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                54
                            </div>
                            <div class="Bo">
                                廴
                            </div>
                            <div class="am_han">
                                Dẫn
                            </div>
                            <div class="y_nghia">
                                Bước dài
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                55
                            </div>
                            <div class="Bo">
                                廾
                            </div>
                            <div class="am_han">
                                Củng
                            </div>
                            <div class="y_nghia">
                                Chắp tay
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                56
                            </div>
                            <div class="Bo">
                                弋
                            </div>
                            <div class="am_han">
                                Dặc
                            </div>
                            <div class="y_nghia">
                                Chiếm lấy
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                57
                            </div>
                            <div class="Bo">
                                弓
                            </div>
                            <div class="am_han">
                                Cung
                            </div>
                            <div class="y_nghia">
                                Cung tên
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                58
                            </div>
                            <div class="Bo">
                                彐
                            </div>
                            <div class="am_han">
                                Kệ
                            </div>
                            <div class="y_nghia">
                                Đầu con nhím
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                59
                            </div>
                            <div class="Bo">
                                彡
                            </div>
                            <div class="am_han">
                                Sam
                            </div>
                            <div class="y_nghia">
                                Lông, tóc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                60
                            </div>
                            <div class="Bo">
                                彳
                            </div>
                            <div class="am_han">
                                Xích
                            </div>
                            <div class="y_nghia">
                                Bước chân trái
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                61
                            </div>
                            <div class="Bo">
                                忄
                            </div>
                            <div class="am_han">
                                Tâm
                            </div>
                            <div class="y_nghia">
                                Tim, tâm trí, tấm lòng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                62
                            </div>
                            <div class="Bo">
                                支
                            </div>
                            <div class="am_han">
                                Chi
                            </div>
                            <div class="y_nghia">
                                Cành nhánh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                63
                            </div>
                            <div class="Bo">
                                攴
                            </div>
                            <div class="am_han">
                                Phộc
                            </div>
                            <div class="y_nghia">
                                Đánh khẽ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                64
                            </div>
                            <div class="Bo">
                                文
                            </div>
                            <div class="am_han">
                                Văn
                            </div>
                            <div class="y_nghia">
                                Văn vẻ, văn chương, vẻ sáng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                65
                            </div>
                            <div class="Bo">
                                斗
                            </div>
                            <div class="am_han">
                                Đẩu
                            </div>
                            <div class="y_nghia">
                                Cái đấu để đong
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                66
                            </div>
                            <div class="Bo">
                                斤
                            </div>
                            <div class="am_han">
                                Cân
                            </div>
                            <div class="y_nghia">
                                Cái búa, rìu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                67
                            </div>
                            <div class="Bo">
                                方
                            </div>
                            <div class="am_han">
                                Phương
                            </div>
                            <div class="y_nghia">
                                Vuông
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                68
                            </div>
                            <div class="Bo">
                                无
                            </div>
                            <div class="am_han">
                                Vô
                            </div>
                            <div class="y_nghia">
                                Không
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                69
                            </div>
                            <div class="Bo">
                                日
                            </div>
                            <div class="am_han">
                                Nhật
                            </div>
                            <div class="y_nghia">
                                Ngày, mặt trời
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                70
                            </div>
                            <div class="Bo">
                                曰
                            </div>
                            <div class="am_han">
                                Viết
                            </div>
                            <div class="y_nghia">
                                Nói rằng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                71
                            </div>
                            <div class="Bo">
                                月
                            </div>
                            <div class="am_han">
                                Nguyệt
                            </div>
                            <div class="y_nghia">
                                Tháng, mặt trăng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                72
                            </div>
                            <div class="Bo">
                                木
                            </div>
                            <div class="am_han">
                                Mộc
                            </div>
                            <div class="y_nghia">
                                Gỗ, cây cối
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                73
                            </div>
                            <div class="Bo">
                                歹
                            </div>
                            <div class="am_han">
                                Đãi
                            </div>
                            <div class="y_nghia">
                                Xấu xa, tệ hại
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                74
                            </div>
                            <div class="Bo">
                                比
                            </div>
                            <div class="am_han">
                                Tỷ
                            </div>
                            <div class="y_nghia">
                                So sánh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                75
                            </div>
                            <div class="Bo">
                                毛
                            </div>
                            <div class="am_han">
                                Mao 
                            </div>
                            <div class="y_nghia">
                                Lông
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                76
                            </div>
                            <div class="Bo">
                                氏
                            </div>
                            <div class="am_han">
                                Thị
                            </div>
                            <div class="y_nghia">
                                Họ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                77
                            </div>
                            <div class="Bo">
                                气
                            </div>
                            <div class="am_han">
                                Khí
                            </div>
                            <div class="y_nghia">
                                Hơi nước
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                78
                            </div>
                            <div class="Bo">
                                斗 
                            </div>
                            <div class="am_han">
                                Đầu
                            </div>
                            <div class="y_nghia">
                                Đấu, đong
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                79
                            </div>
                            <div class="Bo">
                                欠
                            </div>
                            <div class="am_han">
                                Khiếm
                            </div>
                            <div class="y_nghia">
                                Khiếm khuyết, thiếu vắng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                               80 
                            </div>
                            <div class="Bo">
                                止
                            </div>
                            <div class="am_han">
                                Chỉ
                            </div>
                            <div class="y_nghia">
                                Dừng lại
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>

            </div>
            <div class="page_number" style="display: flex; width: 100%; justify-content: end;">
                <nav aria-label="Page navigation">
                  <ul class="pagination    ">
                    <li class="page-item disabled">
                      <a class="page-link" href="./bo_thu.php" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active"   aria-current="page"><a class="page-link" href="./bo_thu.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="./bo_thu_1.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="./bo_thu_2.php">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="./bo_thu_1.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
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