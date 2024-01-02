<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./kanji.css">
</head>
<body>
    <div class="container-xl">
        <!-- Logo -->
        <div class="row ">
            <div class="col bar">
                <div class="logo">
                    <a href="#">
                        <img src="./../../../image/Nihongo_Master_Logo.png" style="width: 50px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end bar">
                <div class="login_search" style="margin-top: 11px; ">
                    <a href="#" style="color: black; font-size: 20px; margin-right: 20px;"><i class="fas fa-search"></i></a>
                    <a href="./../../../user/info/user.php" style="color: black;font-size: 20px;"><i class="fas fa-user"></i></a>

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
                                <a style="text-decoration: none; color: black;" href="./../../../home.php">Trang Chủ</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <a style="text-decoration: none; color: black;" href="./../../../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                        <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../../source_JLPT/JLPT_Test.php">JLPT</a>
                            </span>
                        </button>
                    </li>
                </ul>
                
            </div>
            
            
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Tai Lieu -->
            <div class="tab-pane active" id="Tai_Lieu" role="tabpanel" aria-labelledby="Tai_Lieu-tab">
                <div class="menu_bar">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: navy;" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sơ cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                <a class="dropdown-item" href="./../minna/minna.php">Minna sơ cấp</a>
                                <a class="dropdown-item" href="./../kanji/kanji.php">Hán tự</a>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trung cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                <a class="dropdown-item" href="./../../trungcap/kanji/kanji_2.php">Hán tự</a> 
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="./../../N5/N5.php"> N5</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N4/N4.php">N4</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N3/N3.php">N3</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N2/N2.php">N2</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N1/N1.php">N1</a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">
                <div class="content ">
                    <div class="content_left" style="width: 100%;">
                        <!-- Content -->
                        <h2>Hán tự sơ cấp</h2>
                        <div class="kanji">
                            <div class="col_kanji" style=" margin-bottom: 3%;
                            " >
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/01.png" alt="">
                                    </div>
                                    <div class="text">
                                        Kokoro (tim)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/02.png" alt="">
                                    </div>
                                    <div class="text">
                                        Ai (yêu)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/03.png" alt="">
                                    </div>
                                    <div class="text">
                                        Hito (người)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/04.png" alt="">
                                    </div>
                                    <div class="text">
                                        Kane/Kin (tiền/vàng)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/05.png" alt="">
                                    </div>
                                    <div class="text">
                                        Yume (mơ)
                                    </div>
                                </div>
                            </div>

                            <div class="col_kanji">
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/06.png" alt="">
                                    </div>
                                    <div class="text">
                                        Sakura (hoa anh đào)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/07.png" alt="">
                                    </div>
                                    <div class="text">
                                        Watashi (tôi)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/08.png" alt="">
                                    </div>
                                    <div class="text">
                                        Hon (sách)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/09.png" alt="">
                                    </div>
                                    <div class="text">
                                        Shoku (đồ ăn)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_1">
                                    <div class="img">
                                        <img src="./../../../image/kanji/10.png" alt="">
                                    </div>
                                    <div class="text">
                                        En (tiền tệ Nhật Bản)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="kanji">
                            <div class="col_kanji" style="    margin-bottom: 3%;
                            ">
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/11.png" alt="">
                                    </div>
                                    <div class="text">
                                        Mon (cổng)

                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/12.png" alt="">
                                    </div>
                                    <div class="text">
                                        Kinniku (cơ bắp)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/13.png" alt="">
                                    </div>
                                    <div class="text">
                                        Shashin (ảnh)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/14.png" alt="">
                                    </div>
                                    <div class="text">
                                        Yoru (đêm)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/15.png" alt="">
                                    </div>
                                    <div class="text">
                                        Kuruma (xe ô tô)
                                    </div>
                                </div>
                            </div>
                            <div class="col_kanji">
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/16.png" alt="">
                                    </div>
                                    <div class="text">
                                        Onsen (suối nước nóng)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/17.png" alt="">
                                    </div>
                                    <div class="text">
                                        Soba (mỳ soba)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/18.png" alt="">
                                    </div>
                                    <div class="text">
                                        Yama (núi)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/19.png" alt="">
                                    </div>
                                    <div class="text">
                                        Bonsai (cây cảnh bonsai)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_2">
                                    <div class="img">
                                        <img src="./../../../image/kanji/20.png" alt="">
                                    </div>
                                    <div class="text">
                                        Donburi (bát tô)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="kanji">
                            <div class="col_kanji" style="    margin-bottom: 3%;
                            ">
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/21.png" alt="">
                                    </div>
                                    <div class="text">
                                        Tokee (đồng hồ)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/22.png" alt="">
                                    </div>
                                    <div class="text">
                                        uki (tuyết)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/23.png" alt="">
                                    </div>
                                    <div class="text">
                                        Neko (mèo)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/24.png" alt="">
                                    </div>
                                    <div class="text">
                                        Tamago (trứng)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/25.png" alt="">
                                    </div>
                                    <div class="text">
                                        Ashi (chân)
                                    </div>
                                </div>
                            </div>
                            <div class="col_kanji">
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/26.png" alt="">
                                    </div>
                                    <div class="text">
                                        Umi (biển)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/27.png" alt="">
                                    </div>
                                    <div class="text">
                                        Men (mỳ)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/28.png" alt="">
                                    </div>
                                    <div class="text">
                                        Tera (chùa)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/29.png" alt="">
                                    </div>
                                    <div class="text">
                                        Syo (viết)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_3">
                                    <div class="img">
                                        <img src="./../../../image/kanji/20.png" alt="">
                                    </div>
                                    <div class="text">
                                        Jinja (đền)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="kanji">
                            <div class="col_kanji" style="    margin-bottom: 3%;
                            ">
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/31.png" alt="">
                                    </div>
                                    <div class="text">
                                        Ninja (ninja)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/32.png" alt="">
                                    </div>
                                    <div class="text">
                                        Doobutsu (động vật)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/33.png" alt="">
                                    </div>
                                    <div class="text">
                                        sakana (cá)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/34.png" alt="">
                                    </div>
                                    <div class="text">
                                        manga (truyện tranh)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/35.png" alt="">
                                    </div>
                                    <div class="text">
                                        densha (tàu điện)
                                    </div>
                                </div>
                            </div>
                            <div class="col_kanji">
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/36.png" alt="">
                                    </div>
                                    <div class="text">
                                        yu (nước nóng)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/37.png" alt="">
                                    </div>
                                    <div class="text">
                                        uta (bài hát)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/38.png" alt="">
                                    </div>
                                    <div class="text">
                                        fune (thuyền/tàu)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/39.png" alt="">
                                    </div>
                                    <div class="text">
                                        shiro (ngôi thành)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_4">
                                    <div class="img">
                                        <img src="./../../../image/kanji/40.png" alt="">
                                    </div>
                                    <div class="text">
                                        boosai (ứng phó thảm hoạ)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="kanji">
                            <div class="col_kanji" style="    margin-bottom: 3%;
                            ">
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/41.png" alt="">
                                    </div>
                                    <div class="text">
                                        sashimi (cá sống)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/42.png" alt="">
                                    </div>
                                    <div class="text">
                                        hana (hoa)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/43.png" alt="">
                                    </div>
                                    <div class="text">
                                        fuyu (mùa Đông)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/44.png" alt="">
                                    </div>
                                    <div class="text">
                                        tenki (thời tiết)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/45.png" alt="">
                                    </div>
                                    <div class="text">
                                        samurai (samurai)
                                    </div>
                                </div>
                            </div>
                            <div class="col_kanji">
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/46.png" alt="">
                                    </div>
                                    <div class="text">
                                        taki (thác)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/47.png" alt="">
                                    </div>
                                    <div class="text">
                                        tama (bóng)
                                    </div>
                                </div>
                                <div class="item_kanji" id="item_5">
                                    <div class="img">
                                        <img src="./../../../image/kanji/48.png" alt="">
                                    </div>
                                    <div class="text">
                                        sotsugyoo (tốt nghiệp)
                                    </div>
                                </div>
                                <div class="item_kanji" id="#">
                                    <div class="img">
                                        <img src="" alt="">
                                    </div>
                                    <div class="text">
                                    </div>
                                </div>
                                <div class="item_kanji" id="#">
                                    <div class="img">
                                        <img src="" alt="">
                                    </div>
                                    <div class="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List giao trinh -->
                    <div class="d-none d-md-inline-block" style="width: 28%; border-left: 2px solid rgb(228, 228, 228); margin-left: 25px;">
                        <div class="giaoTrinh" style="margin-left: 10px;">
                            <h4><b>Giáo trình</b></h4>
                            <h4 style="text-align: end;"><b>môn học</b></h4>
                            <hr>
                            <div class="list_giaoTrinh">
                                <ul>
                                    <div class="header">
                                        <a href="#">Sơ cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                    </li>
                                    <li>
                                        <a href="./../../socap/minna/minna.php">Minna sơ cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../socap/kanji/kanji.php">Hán tự</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="#">Trung cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../trungcap/kanji/kanji_2.php">Hán tự</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N5/N5.php">N5</a>
                                    </div>
                                    <li>
                                        <a href="./../../N5/N5.php">Từ vựng, ngữ pháp N5</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N4/N4.php">N4</a>
                                    </div>
                                    <li>
                                        <a href="./../../N4/N4.php">Từ vựng, ngữ pháp N4</a>
                                    </li>
                                
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N3/N3.php">N3</a>
                                    </div>
                                    <li>
                                        <a href="./../../N3/N3.php">Từ vựng, ngữ pháp N3</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N2/N2.php">N2</a>
                                    </div>
                                    <li>
                                        <a href="./../../N2/N2.php">Từ vựng, ngữ pháp N2</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N1/N1.php">N1</a>
                                    </div>
                                    <li>
                                        <a href="./../../N1/N1.php">Từ vựng, ngữ pháp N1</a>
                                    </li>

                                </ul>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
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
                        <img src="./../../../image/Nihongo_Master_Logo.png" style="width: 80px;" alt="">
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
                <img src="./../../../image/image_bg/Bar background.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>