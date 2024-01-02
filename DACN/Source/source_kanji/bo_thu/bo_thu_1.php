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
                               81 
                            </div>
                            <div class="Bo">
                                殳
                            </div>
                            <div class="am_han">
                                Thù
                            </div>
                            <div class="y_nghia">
                                Binh khí
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                82
                            </div>
                            <div class="Bo">
                                毋
                            </div>
                            <div class="am_han">
                                Vô
                            </div>
                            <div class="y_nghia">
                                Đừng, chớ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                83
                            </div>
                            <div class="Bo">
                                扌
                            </div>
                            <div class="am_han">
                                Thủ
                            </div>
                            <div class="y_nghia">
                                Tay
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                84
                            </div>
                            <div class="Bo">
                                氵
                            </div>
                            <div class="am_han">
                                Thủy
                            </div>
                            <div class="y_nghia">
                                Nước
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                85
                            </div>
                            <div class="Bo">
                                火
                            </div>
                            <div class="am_han">
                                Hỏa
                            </div>
                            <div class="y_nghia">
                                Lửa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                86
                            </div>
                            <div class="Bo">
                                牜
                            </div>
                            <div class="am_han">
                                Ngưu
                            </div>
                            <div class="y_nghia">
                                Con trâu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                87
                            </div>
                            <div class="Bo">
                                犭
                            </div>
                            <div class="am_han">
                                Khuyển
                            </div>
                            <div class="y_nghia">
                                Con chó
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                88
                            </div>
                            <div class="Bo">
                                疒 
                            </div>
                            <div class="am_han">
                                Nạch
                            </div>
                            <div class="y_nghia">
                                Bệnh tật
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                89
                            </div>
                            <div class="Bo">
                                癶
                            </div>
                            <div class="am_han">
                                Bát
                            </div>
                            <div class="y_nghia">
                                Ngược lại
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                               90 
                            </div>
                            <div class="Bo">
                                礻
                            </div>
                            <div class="am_han">
                                Thị
                            </div>
                            <div class="y_nghia">
                                Chỉ thị
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                               91 
                            </div>
                            <div class="Bo">
                                禾
                            </div>
                            <div class="am_han">
                                Hòa
                            </div>
                            <div class="y_nghia">
                                Lúa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                92
                            </div>
                            <div class="Bo">
                                立
                            </div>
                            <div class="am_han">
                                Lập
                            </div>
                            <div class="y_nghia">
                                Đứng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                93
                            </div>
                            <div class="Bo">
                                竹 
                            </div>
                            <div class="am_han">
                                Trúc
                            </div>
                            <div class="y_nghia">
                                Tre, trúc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                94
                            </div>
                            <div class="Bo">
                                糸
                            </div>
                            <div class="am_han">
                                Mịch
                            </div>
                            <div class="y_nghia">
                                Sợi tơ nhỏ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                95
                            </div>
                            <div class="Bo">
                                老
                            </div>
                            <div class="am_han">
                                Lão
                            </div>
                            <div class="y_nghia">
                                Già
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                96
                            </div>
                            <div class="Bo">
                                艹
                            </div>
                            <div class="am_han">
                                Thảo
                            </div>
                            <div class="y_nghia">
                                Cỏ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                97
                            </div>
                            <div class="Bo">
                                衤
                            </div>
                            <div class="am_han">
                                Y
                            </div>
                            <div class="y_nghia">
                                Áo
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                98
                            </div>
                            <div class="Bo">
                                言 
                            </div>
                            <div class="am_han">
                                Ngôn
                            </div>
                            <div class="y_nghia">
                                Nói
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                99
                            </div>
                            <div class="Bo">
                                足
                            </div>
                            <div class="am_han">
                                Túc
                            </div>
                            <div class="y_nghia">
                                Chân
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                100
                            </div>
                            <div class="Bo">
                                辶
                            </div>
                            <div class="am_han">
                                Sước
                            </div>
                            <div class="y_nghia">
                                Lúc đi, lúc dừng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                101
                            </div>
                            <div class="Bo">
                                阝
                            </div>
                            <div class="am_han">
                                Phụ/Ấp
                            </div>
                            <div class="y_nghia">
                                Gò đất
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                102
                            </div>
                            <div class="Bo">
                                門
                            </div>
                            <div class="am_han">
                                Môn
                            </div>
                            <div class="y_nghia">
                                Cửa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                              103  
                            </div>
                            <div class="Bo">
                                飠
                            </div>
                            <div class="am_han">
                                Thực
                            </div>
                            <div class="y_nghia">
                                Ăn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                               104 
                            </div>
                            <div class="Bo">
                                戈
                            </div>
                            <div class="am_han">
                                Qua
                            </div>
                            <div class="y_nghia">
                                Cây qua (binh khí dài)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                105
                            </div>
                            <div class="Bo">
                                戶
                            </div>
                            <div class="am_han">
                                Hộ
                            </div>
                            <div class="y_nghia">
                                Cửa một cánh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                106
                            </div>
                            <div class="Bo">
                                火
                            </div>
                            <div class="am_han">
                                Hoả
                            </div>
                            <div class="y_nghia">
                                Lửa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                107
                            </div>
                            <div class="Bo">
                                爪
                            </div>
                            <div class="am_han">
                                Trảo
                            </div>
                            <div class="y_nghia">
                                Móng vuốt cầm thú
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                108
                            </div>
                            <div class="Bo">
                                父
                            </div>
                            <div class="am_han">
                                Phụ
                            </div>
                            <div class="y_nghia">
                                Cha
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                109
                            </div>
                            <div class="Bo">
                                爻
                            </div>
                            <div class="am_han">
                                Hào
                            </div>
                            <div class="y_nghia">
                                Hào âm, hào dương
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                110
                            </div>
                            <div class="Bo">
                                爿
                            </div>
                            <div class="am_han">
                                Tường
                            </div>
                            <div class="y_nghia">
                                Mảnh gỗ, cái giường
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                111
                            </div>
                            <div class="Bo">
                                瓜
                            </div>
                            <div class="am_han">
                                Qua
                            </div>
                            <div class="y_nghia">
                                Quả dưa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                112
                            </div>
                            <div class="Bo">
                                片
                            </div>
                            <div class="am_han">
                                Phiến
                            </div>
                            <div class="y_nghia">
                                Mảnh, tấm, miếng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                113
                            </div>
                            <div class="Bo">
                                牙
                            </div>
                            <div class="am_han">
                                Nha
                            </div>
                            <div class="y_nghia">
                                Răng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                114
                            </div>
                            <div class="Bo">
                                玄
                            </div>
                            <div class="am_han">
                                Huyền
                            </div>
                            <div class="y_nghia">
                                Màu đen huyền, huyền bí
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                115
                            </div>
                            <div class="Bo">
                                玉
                            </div>
                            <div class="am_han">
                                Ngọc
                            </div>
                            <div class="y_nghia">
                                Đá quý, ngọc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                116
                            </div>
                            <div class="Bo">
                                瓦
                            </div>
                            <div class="am_han">
                                Ngoã
                            </div>
                            <div class="y_nghia">
                                Ngói
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                117
                            </div>
                            <div class="Bo">
                                甘
                            </div>
                            <div class="am_han">
                                Cam
                            </div>
                            <div class="y_nghia">
                                Ngọt
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                118
                            </div>
                            <div class="Bo">
                                生
                            </div>
                            <div class="am_han">
                                Sinh
                            </div>
                            <div class="y_nghia">
                                Sinh đẻ, sinh sống
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                119
                            </div>
                            <div class="Bo">
                                用
                            </div>
                            <div class="am_han">
                                Dụng
                            </div>
                            <div class="y_nghia">
                                Dùng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                120
                            </div>
                            <div class="Bo">
                                田
                            </div>
                            <div class="am_han">
                                Điền
                            </div>
                            <div class="y_nghia">
                                Ruộng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                121
                            </div>
                            <div class="Bo">
                                疋
                            </div>
                            <div class="am_han">
                                Thất
                            </div>
                            <div class="y_nghia">
                                Đơn vị đo chiều dài, tấm (vải)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                122
                            </div>
                            <div class="Bo">
                                白
                            </div>
                            <div class="am_han">
                                Bạch
                            </div>
                            <div class="y_nghia">
                                Màu trắng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                123
                            </div>
                            <div class="Bo">
                                皮
                            </div>
                            <div class="am_han">
                                Bì
                            </div>
                            <div class="y_nghia">
                                Da
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                124
                            </div>
                            <div class="Bo">
                                皿
                            </div>
                            <div class="am_han">
                                Mãnh
                            </div>
                            <div class="y_nghia">
                                Bát dĩa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                125
                            </div>
                            <div class="Bo">
                                目
                            </div>
                            <div class="am_han">
                                Mục
                            </div>
                            <div class="y_nghia">
                                Mắt
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                126
                            </div>
                            <div class="Bo">
                                矛
                            </div>
                            <div class="am_han">
                                Mâu
                            </div>
                            <div class="y_nghia">
                                Cây giáo để đâm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                127
                            </div>
                            <div class="Bo">
                                矢
                            </div>
                            <div class="am_han">
                                Thỉ
                            </div>
                            <div class="y_nghia">
                                Cây tên, mũi tên
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                128
                            </div>
                            <div class="Bo">
                                石
                            </div>
                            <div class="am_han">
                                Thạch
                            </div>
                            <div class="y_nghia">
                                Đá
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                129
                            </div>
                            <div class="Bo">
                                示
                            </div>
                            <div class="am_han">
                                Thị, Kỳ
                            </div>
                            <div class="y_nghia">
                                Chỉ thị, thần đất
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                130
                            </div>
                            <div class="Bo">
                                禸
                            </div>
                            <div class="am_han">
                                Nhựu
                            </div>
                            <div class="y_nghia">
                                Vết chân, lốt chân
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                131
                            </div>
                            <div class="Bo">
                                禾
                            </div>
                            <div class="am_han">
                                Hoà
                            </div>
                            <div class="y_nghia">
                                Lúa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                132
                            </div>
                            <div class="Bo">
                                穴
                            </div>
                            <div class="am_han">
                                Huyệt
                            </div>
                            <div class="y_nghia">
                                Hang lỗ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                133
                            </div>
                            <div class="Bo">
                                立
                            </div>
                            <div class="am_han">
                                Lập
                            </div>
                            <div class="y_nghia">
                                Đứng, thành lập
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                134
                            </div>
                            <div class="Bo">
                                米
                            </div>
                            <div class="am_han">
                                Mễ
                            </div>
                            <div class="y_nghia">
                                Gạo
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                135
                            </div>
                            <div class="Bo">
                                缶
                            </div>
                            <div class="am_han">
                                Phẫu
                            </div>
                            <div class="y_nghia">
                                Đồ sành
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                136
                            </div>
                            <div class="Bo">
                                网
                            </div>
                            <div class="am_han">
                                Võng
                            </div>
                            <div class="y_nghia">
                                Cái lưới
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                137
                            </div>
                            <div class="Bo">
                                羊
                            </div>
                            <div class="am_han">
                                Dương
                            </div>
                            <div class="y_nghia">
                                Con dê
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                138
                            </div>
                            <div class="Bo">
                                羽
                            </div>
                            <div class="am_han">
                                Vũ
                            </div>
                            <div class="y_nghia">
                                Lông vũ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                139
                            </div>
                            <div class="Bo">
                                而
                            </div>
                            <div class="am_han">
                                Nhi
                            </div>
                            <div class="y_nghia">
                                Mà, và
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                140
                            </div>
                            <div class="Bo">
                                耒
                            </div>
                            <div class="am_han">
                                Lỗi
                            </div>
                            <div class="y_nghia">
                                Cái cày
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                141
                            </div>
                            <div class="Bo">
                                耳
                            </div>
                            <div class="am_han">
                                Nhĩ
                            </div>
                            <div class="y_nghia">
                                Tai (lỗ tai)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                142
                            </div>
                            <div class="Bo">
                                聿
                            </div>
                            <div class="am_han">
                                Duật
                            </div>
                            <div class="y_nghia">
                                Cây bút
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                143
                            </div>
                            <div class="Bo">
                                肉
                            </div>
                            <div class="am_han">
                                Nhục
                            </div>
                            <div class="y_nghia">
                                Thịt
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                144
                            </div>
                            <div class="Bo">
                                臣
                            </div>
                            <div class="am_han">
                                Thần
                            </div>
                            <div class="y_nghia">
                                Bầy tôi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                145
                            </div>
                            <div class="Bo">
                                自
                            </div>
                            <div class="am_han">
                                Tự
                            </div>
                            <div class="y_nghia">
                                Tự bản thân, kể từ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                146
                            </div>
                            <div class="Bo">
                                至
                            </div>
                            <div class="am_han">
                                Chí
                            </div>
                            <div class="y_nghia">
                                Đến
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                147
                            </div>
                            <div class="Bo">
                                臼
                            </div>
                            <div class="am_han">
                                臼  
                            </div>
                            <div class="y_nghia">
                                Cái cối giã gạo
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                148
                            </div>
                            <div class="Bo">
                                舌
                            </div>
                            <div class="am_han">
                                Thiệt
                            </div>
                            <div class="y_nghia">
                                Cái lưỡi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                149
                            </div>
                            <div class="Bo">
                                舛
                            </div>
                            <div class="am_han">
                                Suyễn
                            </div>
                            <div class="y_nghia">
                                Sai suyễn, sai lầm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                150
                            </div>
                            <div class="Bo">
                                舟
                            </div>
                            <div class="am_han">
                                Chu
                            </div>
                            <div class="y_nghia">
                                Cái thuyền
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                151
                            </div>
                            <div class="Bo">
                                艮
                            </div>
                            <div class="am_han">
                                Cấn
                            </div>
                            <div class="y_nghia">
                                Dừng, bền cứng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                152
                            </div>
                            <div class="Bo">
                                色
                            </div>
                            <div class="am_han">
                                Sắc
                            </div>
                            <div class="y_nghia">
                                Màu, dáng vẻ, nữ sắc
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                153
                            </div>
                            <div class="Bo">
                                虍
                            </div>
                            <div class="am_han">
                                Hô
                            </div>
                            <div class="y_nghia">
                                Vằn vện của con hổ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                154
                            </div>
                            <div class="Bo">
                                虫
                            </div>
                            <div class="am_han">
                                Trùng
                            </div>
                            <div class="y_nghia">
                                Sâu bọ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                155
                            </div>
                            <div class="Bo">
                                血
                            </div>
                            <div class="am_han">
                                Huyết
                            </div>
                            <div class="y_nghia">
                                Máu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                156
                            </div>
                            <div class="Bo">
                                行
                            </div>
                            <div class="am_han">
                                Hành
                            </div>
                            <div class="y_nghia">
                                Đi, thi hành, làm được
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                157
                            </div>
                            <div class="Bo">
                                襾
                            </div>
                            <div class="am_han">
                                Á
                            </div>
                            <div class="y_nghia">
                                Che đậy, úp lên
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                158
                            </div>
                            <div class="Bo">
                                見
                            </div>
                            <div class="am_han">
                                Kiến
                            </div>
                            <div class="y_nghia">
                                Trông thấy
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                159
                            </div>
                            <div class="Bo">
                                角
                            </div>
                            <div class="am_han">
                                Giác
                            </div>
                            <div class="y_nghia">
                                Góc, sừng thú
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                160
                            </div>
                            <div class="Bo">
                                谷
                            </div>
                            <div class="am_han">
                                Cốc
                            </div>
                            <div class="y_nghia">
                                Khe nước chảy giữa 2 núi, thung lũng
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>

            </div>
            <div class="page_number" style="display: flex; width: 100%; justify-content: end;">
                <nav aria-label="Page navigation">
                  <ul class="pagination    ">
                    <li class="page-item">
                      <a class="page-link" href="./bo_thu.php" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item" ><a class="page-link" href="./bo_thu.php">1</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="./bo_thu_1.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="./bo_thu_2.php">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="./bo_thu_2.php" aria-label="Next">
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