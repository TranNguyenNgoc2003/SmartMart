<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="N3.css">
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
                        <button class="nav-link active" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                        <a style="text-decoration: none; color: black;" href="./../../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                            <span style="color: black;">JLPT</span>
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
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sơ cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                <a class="dropdown-item" href="./../socap/minna/minna.php">Minna sơ cấp</a>
                                <a class="dropdown-item" href="./../socap/kanji/kanji.php">Hán tự</a>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trung cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                <a class="dropdown-item" href="./../trungcap/kanji/kanji_2.php">Hán tự</a> 
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="./../N5/N5.php"> N5</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../N4/N4.php">N4</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a  style="color: navy;" href="./../N3/N3.php">N3</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../N2/N2.php">N2</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../N1/N1.php">N1</a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">

                <div class="content" style="display: flex; justify-content: space-between;">
                    <div class="content_left" style="width: 100%;">
                        <!-- Content -->
                        <div class="header_content">
                            <h3> Từ vựng, ngữ pháp N3</h3>
                        </div>
                        <ul class="list_item">
                            <li class="item" id="item_1">
                                <a href="./bai_1/minna-bai-1.php">
                                    <img height="100px" src="./../../image/minna/minna_1.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 01: Giới thiệu bản thân
                                        </div>
                                        <div class="text_item">
                                            わたしは がくせいです。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi là học sinh
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                    <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 02: Đai từ chỉ đinh
                                        </div>
                                        <div class="text_item">
                                            あれは 何（なん）ですか。
                                        </div>
                                        <div class="cmt_item">
                                            Kia là cái gì?
                                        </div>
                                    </div>
                                    <img height="100px" src="./../../image/minna/minna_2.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_3.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 03: Đai từ chỉ phương hướng
                                        </div>
                                        <div class="text_item">
                                            がっこうは どこですか。
                                        </div>
                                        <div class="cmt_item">
                                            Trường bạn là trường nào?
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 04: Cách nói về thời gian
                                        </div>
                                        <div class="text_item">
                                            今 何時なんじですか。
                                        </div>
                                        <div class="cmt_item">
                                            Bây giờ là mấy giờ?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_4.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_5.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 05: Động từ chỉ sự di chuyển
                                        </div>
                                        <div class="text_item">
                                            できます。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đã đến đây bằng taxi.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 06: Ngoại động từ (たどうし)
                                        </div>
                                        <div class="text_item">
                                            何を飲みますか。
                                        </div>
                                        <div class="cmt_item">
                                            Bạn uống gì?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_6.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_7.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 07: Cách nói cho nhận
                                        </div>
                                        <div class="text_item">
                                            はしでごはんをたべます。
                                        </div>
                                        <div class="cmt_item">
                                            Ăn cơm bằng đũa.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 08: Tính từ
                                        </div>
                                        <div class="text_item">
                                            にほんのせいかつはどうですか。
                                        </div>
                                        <div class="cmt_item">
                                            Cuộc sống ở Nhật thế nào(ra sao)?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_8.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_9.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 09: Sở thích - Năng lực
                                        </div>
                                        <div class="text_item">
                                            ジュースがすきです。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi thích nước hoa quả.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 10: Cách nói sự tồn tại của người, sư vật
                                        </div>
                                        <div class="text_item">
                                            さくらがあります。
                                        </div>
                                        <div class="cmt_item">
                                            Có cây hoa anh đào
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_10.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_11.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 11: Lương từ tiếng Nhât
                                        </div>
                                        <div class="text_item">
                                            みかんをいくつかいましたか。
                                        </div>
                                        <div class="cmt_item">
                                            Bạn đã mua mấy quả quýt?
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 12: Tính từ trong quá khứ
                                        </div>
                                        <div class="text_item">
                                            きのうはあめでした。
                                        </div>
                                        <div class="cmt_item">
                                            Hôm qua mưa.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_12.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_13.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 13: Mong muốn cái gì, làm cái gì
                                        </div>
                                        <div class="text_item">
                                            わたしはパンがほしいです。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi muốn có môt ổ bánh mì
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 14: Động từ thể "て"
                                        </div>
                                        <div class="text_item">
                                            あめがふります。
                                        </div>
                                        <div class="cmt_item">
                                            Trời mưa
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_14.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_15.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 15: Mẫu câu được, không được làm gì. 
                                        </div>
                                        <div class="text_item">
                                            しゃしんをとってもいいです。
                                        </div>
                                        <div class="cmt_item">
                                            Bạn có thể chụp hình.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 16: Cách sử dụng động từ thể "て"
                                        </div>
                                        <div class="text_item">
                                            レストランでしょくじしました。 
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đi ăn ở nhà hàng.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_16.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_17.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 17: Thể "ない"
                                        </div>
                                        <div class="text_item">
                                            どようびまでにほんをかえさなけれ ばなりません。 
                                        </div>
                                        <div class="cmt_item">
                                            Phải trả sách trước thứ 7.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 18: Động từ khả năng
                                        </div>
                                        <div class="text_item">
                                            カードではらうことができます。
                                        </div>
                                        <div class="cmt_item">
                                            Có thể thanh toán bằng thẻ. (Khả năng).
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_18.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_19.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 19: Thể "た"
                                        </div>
                                        <div class="text_item">
                                            まいばんおんがくをきいたり、かん じをかいたりします。
                                        </div>
                                        <div class="cmt_item">
                                            Mỗi tối tôi nghe nhạc, viết kanji,v.v..
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 20: Thể thông thường và thể lịch sự
                                        </div>
                                        <div class="text_item">
                                            ん こーひーをのむ?
                                        </div>
                                        <div class="cmt_item">
                                            Uống cà phê không?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_20.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_21.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 21: Mẫu cầu nêu lên quan điểm, suy nghĩ
                                        </div>
                                        <div class="text_item">
                                            こうべておおきいじしんがありした。 
                                        </div>
                                        <div class="cmt_item">
                                            Ở Kobe đã (có) xảy ra trận động đất lớn.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 22: Định ngữ
                                        </div>
                                        <div class="text_item">
                                            ともだちとえいがをみるやくそくが あります。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi có hẹn đi xem phim với bạn.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_22.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_23.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 23: Khi ~, lúc ~
                                        </div>
                                        <div class="text_item">
                                            27さいのとき、けっこんしました。
                                        </div>
                                        <div class="cmt_item">
                                            Khi tôi 27 tuổi, tôi đã kết hôn.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 24: Mẫu câu cho, tặng
                                        </div>
                                        <div class="text_item">
                                            はさとうさんにはなをあげました。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đã tặng hoa cho chị Sato.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../image/minna/minna_24.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../image/minna/minna_25.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 25: Mẫu câu giả định, giả sử
                                        </div>
                                        <div class="text_item">
                                            もしおくえんあったら、 いろいろな くにをりょこうしたいです。 
                                        </div>
                                        <div class="cmt_item">
                                            Nếu có 100 triệu yên tôi muốn đi du lịch thật nhiều nước.
                                        </div>
                                    </div>
                                </a>
                            </li>
                       </ul>
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
                                        <a href="./../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                    </li>
                                    <li>
                                        <a href="./../socap/minna/minna.php">Minna sơ cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../socap/kanji/kanji.php">Hán tự</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="#">Trung cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../trungcap/kanji/kanji_2.php">Hán tự</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../N5/N5.php">N5</a>
                                    </div>
                                    <li>
                                        <a href="./../N5/N5.php">Từ vựng, ngữ pháp N5</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../N4/N4.php">N4</a>
                                    </div>
                                    <li>
                                        <a href="./../N4/N4.php">Từ vựng, ngữ pháp N4</a>
                                    </li>
                                
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../N3/N3.php">N3</a>
                                    </div>
                                    <li>
                                        <a href="./../N3/N3.php">Từ vựng, ngữ pháp N3</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../N2/N2.php">N2</a>
                                    </div>
                                    <li>
                                        <a href="./../N2/N2.php">Từ vựng, ngữ pháp N2</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../N1/N1.php">N1</a>
                                    </div>
                                    <li>
                                        <a href="./../N1/N1.php">Từ vựng, ngữ pháp N1</a>
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