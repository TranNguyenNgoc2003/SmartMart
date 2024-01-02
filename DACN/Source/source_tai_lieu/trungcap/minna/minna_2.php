<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./minna_2.css">
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
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sơ cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                <a class="dropdown-item" href="./../../socap/minna/minna.php">Minna sơ cấp</a>
                                <a class="dropdown-item" href="./../../socap/kanji/kanji.php">Hán tự</a>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: navy;" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trung cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../minna/minna_2.php">Minna trung cấp</a>
                                <a class="dropdown-item" href="./../kanji/kanji_2.php">Hán tự</a> 
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
                    <div class="content_left" style="width: 100%;" >
                        <!-- Content -->
                       <h4>みんなの日本語 (2)</h4>
                       <ul class="list_item">
                            <li class="item" id="item_1">
                                <a href="./bai_1/minna_tc-bai-1.php">
                                    <img height="100px" src="./../../../image/minna/minna_1.png" alt="">
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
                                    <img height="100px" src="./../../../image/minna/minna_2.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_3.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_4.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_5.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_6.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_7.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_8.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_9.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_10.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_11.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_12.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_13.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_14.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_15.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_16.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_17.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_18.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_19.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_20.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_21.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_22.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_23.png" alt="">
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
                                   <img height="100px" src="./../../../image/minna/minna_24.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_25.png" alt="">
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
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 26 - Cách hình thành và sử dụng thể "んです"
                                        </div>
                                        <div class="text_item">
                                            どうしておくれたんですか?
                                        </div>
                                        <div class="cmt_item">
                                            Tại sao cô lại đến muộn?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_26.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_27.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 27: Động từ thể khả năng
                                        </div>
                                        <div class="text_item">
                                            わたしのがっこうにはがいこくじん おせんせいがひとりいます。 
                                        </div>
                                        <div class="cmt_item">
                                            Ở trường của tôi có một giáo viên nước ngoài.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 28: Diễn tả 2 hành động xảy ra song song, cùng lúc
                                        </div>
                                        <div class="text_item">
                                            まあさジョギングをしています。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi chạy bộ mỗi sáng.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_28.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_29.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 29: Diễn tả trạng thái đồ vật
                                        </div>
                                        <div class="text_item">
                                            いすがこわれています。
                                        </div>
                                        <div class="cmt_item">
                                            Cái ghế bị hỏng.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 30: Cách diễn tả trạng thái hoặc kết quả của một hành
                                        </div>
                                        <div class="text_item">
                                            たんじょうびのプレゼントはもうか ってあります。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đã mua quà sinh nhật (sẵn) rồi.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_30.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_31.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 31: Động từ thể ý chí 
                                        </div>
                                        <div class="text_item">
                                            しゅうまつはうみへいこうとおもっ ています。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đang định đi biển cuối tuần.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 32: Cách nói diễn tả lời khuyên và khả năng có.... 
                                        </div>
                                        <div class="text_item">
                                            まいにちうんどうしたほうがいいです。
                                        </div>
                                        <div class="cmt_item">
                                            Hàng ngày nên vận động.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_32.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_33.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 33: Thể mệnh lệnh, cấm đoán
                                        </div>
                                        <div class="text_item">
                                            がんばれ。
                                        </div>
                                        <div class="cmt_item">
                                            Cố lên.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 34: Cách nói "theo như", tuần tự của hành động
                                        </div>
                                        <div class="text_item">
                                            せんのとおりに、きってください。
                                        </div>
                                        <div class="cmt_item">
                                            Cắt theo đường này.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_34.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_35.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 35: Thể điều kiện
                                        </div>
                                        <div class="text_item">
                                            いい天気てんきなら、はながさきます。
                                        </div>
                                        <div class="cmt_item">
                                            Nếu trời đẹp thì hoa sẽ nở.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 36: Mẫu câu biểu hiện một hành động nào đó....
                                        </div>
                                        <div class="text_item">
                                            かぜをひかないように、 セーターを きます。
                                        </div>
                                        <div class="cmt_item">
                                            Để không bị cảm cúm, tôi mặc áo len.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_36.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_37.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 37: Thể bị động 
                                        </div>
                                        <div class="text_item">
                                            わたしはいぬにかまられました。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi bị chó cắn.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 38: Danh từ hoá động từ trong tiếng Nhật
                                        </div>
                                        <div class="text_item">
                                            くるまのまどをしめるのをわすれました。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi quên đóng cửa ô tô.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_38.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_39.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 39: Mẫu câu về nguyên nhân và kết quả
                                        </div>
                                        <div class="text_item">
                                            じこでてんしゃがとまりました。
                                        </div>
                                        <div class="cmt_item">
                                            Tai nạn khiến xe điện ngừng chạy.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 40: Trợ từ nghi vấn
                                        </div>
                                        <div class="text_item">
                                            はにのなかになにがあるか、しらべ てください。
                                        </div>
                                        <div class="cmt_item">
                                            Hãy tìm hiểu xem trong hộp có gì hay không?
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_40.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_41.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 41: Cách nói CHO, NHẬN trong tiếng Nhật
                                        </div>
                                        <div class="text_item">
                                            わたしははなにみずをやります。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi tưới nước cho hoa.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 42: Cấu trúc thể hiện mục đích
                                        </div>
                                        <div class="text_item">
                                            このはさみは はなをきるのにつ かいます。
                                        </div>
                                        <div class="cmt_item">
                                            Cái kéo này dùng để cắt hoa.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_42.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_43.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 43: Có vẻ như gì đó
                                        </div>
                                        <div class="text_item">
                                            “そ うです” このりょうりはおいしそうです。
                                        </div>
                                        <div class="cmt_item">
                                            Món này có vẻ ngon này.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 44: Cách nói quá DỄ hoặc quá KHÓ để làm... 
                                        </div>
                                        <div class="text_item">
                                            すしをたべすぎました。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đã ăn quá nhiều Sushi.
                                        </div>
                                    </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_44.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_45.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 45: Ngữ pháp thể hiện sự tiếc nuối 
                                        </div>
                                        <div class="text_item">
                                            ダイエットしているのに、ふとって しまいました。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi đã ăn kiêng thế mà vẫn béo.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 46: Thời điểm của hành động
                                        </div>
                                        <div class="text_item">
                                            このカメラはきのうがったばかりです。
                                        </div>
                                        <div class="cmt_item">
                                            Cái máy ảnh này hôm qua tối vừa mua.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_46.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_47.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 47: Cách nói nghe như thế này, nghe như thế kia
                                        </div>
                                        <div class="text_item">
                                            へんなおとがします。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi nghe thấy âm thanh lạ.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 48: Thể sai khiến
                                        </div>
                                        <div class="text_item">
                                            かかりのものをむかえにいかせますから。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi sẽ gọi nhân viên ra đón.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_48.png" alt="">
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_1">
                                <a href="#">
                                    <img height="100px" src="./../../../image/minna/minna_49.png" alt="">
                                    <div style="padding-left: 20px;">
                                        <div class="header_item">
                                            Bài 49: Tôn kính ngữ (そんけいご - 尊敬語)
                                        </div>
                                        <div class="text_item">
                                            ぶちょうのおくさまもごいっしゃに ゴルフにいかれます。
                                        </div>
                                        <div class="cmt_item">
                                            Vợ cúa trưởng phòng cũng đi chơi golf cùng.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li class="item" id="item_2">
                                <a href="#">
                                   <div style="padding-right: 20px;">
                                        <div class="header_item">
                                            Bài 50: Khiêm nhường ngữ けんじょうご 「謙譲語」
                                        </div>
                                        <div class="text_item">
                                            けんきゅうじょのなかにおります。
                                        </div>
                                        <div class="cmt_item">
                                            Tôi ở trong phòng nghiên cứu.
                                        </div>
                                   </div>
                                   <img height="100px" src="./../../../image/minna/minna_50.png" alt="">
                                </a>
                            </li>
                       </ul>
                    </div>
                    <!-- List giao trinh -->
                    <div div class="d-none d-md-inline-block" style="width: 28%; border-left: 2px solid rgb(228, 228, 228); margin-left: 10px;">
                        <div class="giaoTrinh" style="margin-left: 25px;">
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