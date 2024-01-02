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
                                161
                            </div>
                            <div class="Bo">
                                豆
                            </div>
                            <div class="am_han">
                                Đậu
                            </div>
                            <div class="y_nghia">
                                Hạt đậu, cây đậu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                162
                            </div>
                            <div class="Bo">
                                豕
                            </div>
                            <div class="am_han">
                                Thỉ
                            </div>
                            <div class="y_nghia">
                                Con heo, con lợn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                163
                            </div>
                            <div class="Bo">
                                豸
                            </div>
                            <div class="am_han">
                                Trãi
                            </div>
                            <div class="y_nghia">
                                Loài sâu không chân
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                164
                            </div>
                            <div class="Bo">
                                貝
                            </div>
                            <div class="am_han">
                                Bối
                            </div>
                            <div class="y_nghia">
                                Vật báu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                165
                            </div>
                            <div class="Bo">
                                赤
                            </div>
                            <div class="am_han">
                                Xích
                            </div>
                            <div class="y_nghia">
                                Màu đỏ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                166
                            </div>
                            <div class="Bo">
                                走
                            </div>
                            <div class="am_han">
                                Tẩu
                            </div>
                            <div class="y_nghia">
                                Đi, chạy
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                167
                            </div>
                            <div class="Bo">
                                身
                            </div>
                            <div class="am_han">
                                Thân
                            </div>
                            <div class="y_nghia">
                                Thân thể, thân mình
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                168
                            </div>
                            <div class="Bo">
                                車
                            </div>
                            <div class="am_han">
                                Xa
                            </div>
                            <div class="y_nghia">
                                Chiếc xe
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                169
                            </div>
                            <div class="Bo">
                                辛
                            </div>
                            <div class="am_han">
                                Tân
                            </div>
                            <div class="y_nghia">
                                Cay
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                170
                            </div>
                            <div class="Bo">
                                辰
                            </div>
                            <div class="am_han">
                                辰
                            </div>
                            <div class="y_nghia">
                                Nhật, nguyệt, tinh, thìn (12 chi)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                171
                            </div>
                            <div class="Bo">
                                酉
                            </div>
                            <div class="am_han">
                                Dậu
                            </div>
                            <div class="y_nghia">
                                Một trong 12 địa chi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                172
                            </div>
                            <div class="Bo">
                                釆
                            </div>
                            <div class="am_han">
                                Biện
                            </div>
                            <div class="y_nghia">
                                Phân biệt
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                173
                            </div>
                            <div class="Bo">
                                里
                            </div>
                            <div class="am_han">
                                Lý
                            </div>
                            <div class="y_nghia">
                                Dặm, làng xóm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                174
                            </div>
                            <div class="Bo">
                                金
                            </div>
                            <div class="am_han">
                                Kim
                            </div>
                            <div class="y_nghia">
                                Kim loại, vàng 
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                175
                            </div>
                            <div class="Bo">
                                長
                            </div>
                            <div class="am_han">
                                Trường
                            </div>
                            <div class="y_nghia">
                                Dài, lớn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                176
                            </div>
                            <div class="Bo">
                                隶
                            </div>
                            <div class="am_han">
                                Đãi
                            </div>
                            <div class="y_nghia">
                                Kịp, kịp đến
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                177
                            </div>
                            <div class="Bo">
                                隹
                            </div>
                            <div class="am_han">
                                Truy, chuy
                            </div>
                            <div class="y_nghia">
                                Chim đuôi ngắn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                178
                            </div>
                            <div class="Bo">
                                雨
                            </div>
                            <div class="am_han">
                                Vũ
                            </div>
                            <div class="y_nghia">
                                Mưa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                179
                            </div>
                            <div class="Bo">
                                青
                            </div>
                            <div class="am_han">
                                Thanh
                            </div>
                            <div class="y_nghia">
                                Màu xanh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                180
                            </div>
                            <div class="Bo">
                                非
                            </div>
                            <div class="am_han">
                                Phi
                            </div>
                            <div class="y_nghia">
                                Không
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                181
                            </div>
                            <div class="Bo">
                                韭
                            </div>
                            <div class="am_han">
                                Phi, cửu
                            </div>
                            <div class="y_nghia">
                                Rau phỉ (hẹ)
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                182
                            </div>
                            <div class="Bo">
                                面
                            </div>
                            <div class="am_han">
                                Diện
                            </div>
                            <div class="y_nghia">
                                Mặt, bề mặt
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                183
                            </div>
                            <div class="Bo">
                                革
                            </div>
                            <div class="am_han">
                                Cách
                            </div>
                            <div class="y_nghia">
                                Da thú, thay đổi, cải cách
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                184
                            </div>
                            <div class="Bo">
                                韋
                            </div>
                            <div class="am_han">
                                Vi
                            </div>
                            <div class="y_nghia">
                                Da đã thuộc rồi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                185
                            </div>
                            <div class="Bo">
                                音
                            </div>
                            <div class="am_han">
                                Âm
                            </div>
                            <div class="y_nghia">
                                Âm thanh, tiếng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                186
                            </div>
                            <div class="Bo">
                                頁
                            </div>
                            <div class="am_han">
                                Hiệt
                            </div>
                            <div class="y_nghia">
                                Đầu, trang giấy
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                187
                            </div>
                            <div class="Bo">
                                風
                            </div>
                            <div class="am_han">
                                Phong
                            </div>
                            <div class="y_nghia">
                                Gió
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                188
                            </div>
                            <div class="Bo">
                                飛
                            </div>
                            <div class="am_han">
                                Phi
                            </div>
                            <div class="y_nghia">
                                Bay
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                189
                            </div>
                            <div class="Bo">
                                首
                            </div>
                            <div class="am_han">
                                Thủ
                            </div>
                            <div class="y_nghia">
                                Đầu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                190
                            </div>
                            <div class="Bo">
                                香
                            </div>
                            <div class="am_han">
                                Hương
                            </div>
                            <div class="y_nghia">
                                Mùi hương, hương thơm
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                191
                            </div>
                            <div class="Bo">
                                馬
                            </div>
                            <div class="am_han">
                                Mã
                            </div>
                            <div class="y_nghia">
                                Con ngựa
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                192
                            </div>
                            <div class="Bo">
                                骫
                            </div>
                            <div class="am_han">
                                Cốt
                            </div>
                            <div class="y_nghia">
                                Xương
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                193
                            </div>
                            <div class="Bo">
                                高
                            </div>
                            <div class="am_han">
                                Cao
                            </div>
                            <div class="y_nghia">
                                Cao
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                194
                            </div>
                            <div class="Bo">
                                髟
                            </div>
                            <div class="am_han">
                                Bưu, tiêu
                            </div>
                            <div class="y_nghia">
                                Tóc dài, cỏ phủ mái nhà
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                195
                            </div>
                            <div class="Bo">
                                鬥
                            </div>
                            <div class="am_han">
                                Đấu
                            </div>
                            <div class="y_nghia">
                                Chống nhau, chiến đấu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                196
                            </div>
                            <div class="Bo">
                                鬯
                            </div>
                            <div class="am_han">
                                Sưởng
                            </div>
                            <div class="y_nghia">
                                Rượu nếp, bao đựng cây cung
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                197
                            </div>
                            <div class="Bo">
                                鬲
                            </div>
                            <div class="am_han">
                                Cách
                            </div>
                            <div class="y_nghia">
                                Tên một con sông xưa, cái đỉnh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                198
                            </div>
                            <div class="Bo">
                                鬼
                            </div>
                            <div class="am_han">
                                Quỷ
                            </div>
                            <div class="y_nghia">
                                Con quỷ
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                199
                            </div>
                            <div class="Bo">
                                魚
                            </div>
                            <div class="am_han">
                                Ngư
                            </div>
                            <div class="y_nghia">
                                Con cá
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                200
                            </div>
                            <div class="Bo">
                                鳥
                            </div>
                            <div class="am_han">
                                Điểu
                            </div>
                            <div class="y_nghia">
                                Con chim
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                201
                            </div>
                            <div class="Bo">
                                鹵
                            </div>
                            <div class="am_han">
                                Lỗ
                            </div>
                            <div class="y_nghia">
                                Đất mặn
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                202
                            </div>
                            <div class="Bo">
                                鹿
                            </div>
                            <div class="am_han">
                                Lộc
                            </div>
                            <div class="y_nghia">
                                Con hươu
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                203
                            </div>
                            <div class="Bo">
                                麥
                            </div>
                            <div class="am_han">
                                Mạch
                            </div>
                            <div class="y_nghia">
                                Lúa mạch
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                204
                            </div>
                            <div class="Bo">
                                麻
                            </div>
                            <div class="am_han">
                                Ma
                            </div>
                            <div class="y_nghia">
                                Cây gai
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                205
                            </div>
                            <div class="Bo">
                                黃
                            </div>
                            <div class="am_han">
                                Hoàng
                            </div>
                            <div class="y_nghia">
                                Màu vàng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                206
                            </div>
                            <div class="Bo">
                                黍
                            </div>
                            <div class="am_han">
                                Thử
                            </div>
                            <div class="y_nghia">
                                Lúa nếp
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                207
                            </div>
                            <div class="Bo">
                                黑
                            </div>
                            <div class="am_han">
                                Hắc
                            </div>
                            <div class="y_nghia">
                                Màu đen
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                208
                            </div>
                            <div class="Bo">
                                黹
                            </div>
                            <div class="am_han">
                                Chỉ
                            </div>
                            <div class="y_nghia">
                                May áo, khâu vá
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                209
                            </div>
                            <div class="Bo">
                                黽
                            </div>
                            <div class="am_han">
                                Mãnh
                            </div>
                            <div class="y_nghia">
                                Con ếch, cố gắng
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                210
                            </div>
                            <div class="Bo">
                                鼎
                            </div>
                            <div class="am_han">
                                Đỉnh
                            </div>
                            <div class="y_nghia">
                                Cái đỉnh
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                211
                            </div>
                            <div class="Bo">
                                鼓
                            </div>
                            <div class="am_han">
                                Cổ
                            </div>
                            <div class="y_nghia">
                                Cái trống
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                212
                            </div>
                            <div class="Bo">
                                鼠
                            </div>
                            <div class="am_han">
                                Thử
                            </div>
                            <div class="y_nghia">
                                Con chuột
                            </div>
                        </li>
                        <li class="item_kanji" id="item_1">
                            <div class="STT">
                                213
                            </div>
                            <div class="Bo">
                                鼻
                            </div>
                            <div class="am_han">
                                Tỵ
                            </div>
                            <div class="y_nghia">
                                Cái mũi
                            </div>
                        </li>
                        <li class="item_kanji" id="item_2">
                            <div class="STT">
                                214
                            </div>
                            <div class="Bo">
                                齊
                            </div>
                            <div class="am_han">
                                Tề
                            </div>
                            <div class="y_nghia">
                                Ngang bằng, cùng nhau
                            </div>
                        </li>
                        
                    </ul>
                </div>

            </div>
            <div class="page_number" style="display: flex; width: 100%; justify-content: end;">
                <nav aria-label="Page navigation">
                  <ul class="pagination    ">
                    <li class="page-item">
                      <a class="page-link" href="./bo_thu_1.php" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="./bo_thu.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="./bo_thu_1.php">2</a></li>
                    <li class="page-item active"   aria-current="page"><a class="page-link" href="./bo_thu_2.php">3</a></li>
                    <li class="page-item disabled">
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