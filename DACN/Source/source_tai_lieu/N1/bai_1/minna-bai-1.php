<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./minna-bai-1.css">
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
                            <a style="color: navy;" href="./../../N1/N1.php">N1</a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">
                <div class="content ">
                    <div class="content_left" style="width: 100%;">
                        <!-- Content -->
                        <h2 style="text-align: center; font-weight: bold; color: rgb(86, 85, 85); margin-top: 10px; margin-bottom: 30px;">Từ vựng ngữ pháp [N1] bài 1</h2>
                        <div class="Tu_vung">
                            <h3>1. Từ vựng bài 1</h3>
                            <div class="text" id="item_1" style="margin-top: 30px;">
                                <div class="STT" style="font-style: unset;">STT</div>
                                <div class="Hiragana" style="font-weight: bold;" >Hiragana</div>
                                <div class="Kanji" style="font-weight: bold;">	Kanji</div>
                                <div class="y_nghia" style="font-weight: bold;">Ý nghĩa</div>
                            </div>

                            <div class="text" id="item_2">
                                <div class="STT">1</div>
                                <div class="Hiragana">わたし</div>
                                <div class="Kanji">私</div>
                                <div class="y_nghia">Tôi</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">2</div>
                                <div class="Hiragana">わたしたち</div>
                                <div class="Kanji">私たち</div>
                                <div class="y_nghia">Chúng tôi</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">3</div>
                                <div class="Hiragana">あなた</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Anh/chị, ông/bà, bạn (ngôi thứ 2 số ít)
                                </div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">4</div>
                                <div class="Hiragana">あのひと	</div>
                                <div class="Kanji">あの人</div>
                                <div class="y_nghia">Người kia</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">5</div>
                                <div class="Hiragana">あのかた</div>
                                <div class="Kanji">あの方</div>
                                <div class="y_nghia">Vị này Lịch sự tương đương với あのひと</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">6</div>
                                <div class="Hiragana">みなさん</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Các bạn, các anh, các chị, mọi người</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">7</div>
                                <div class="Hiragana">~さん</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Anh ~, Chị ~, Ông ~, Bà ~ (cách gọi người khác 1 cách lịch sự)</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">8</div>
                                <div class="Hiragana">~ちゃん</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Bé ( dùng cho nữ) hoặc gọi thân mật cho trẻ con ( cả nam lẫn nữ)</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">9</div>
                                <div class="Hiragana">くん</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Bé (dùng cho nam) hoặc gọi thân mật</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">10</div>
                                <div class="Hiragana">~じん</div>
                                <div class="Kanji">~人</div>
                                <div class="y_nghia">Người nước ~
                                </div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">11</div>
                                <div class="Hiragana">せんせい</div>
                                <div class="Kanji">先生</div>
                                <div class="y_nghia">Giáo viên
                                </div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">12</div>
                                <div class="Hiragana">きょうし	</div>
                                <div class="Kanji">教師</div>
                                <div class="y_nghia">Giáo viên ( dùng để nói đến nghề nghiệp)
                                </div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">13</div>
                                <div class="Hiragana">Giáo viên ( dùng để nói đến nghề nghiệp)
                                </div>
                                <div class="Kanji">学生</div>
                                <div class="y_nghia">học sinh, sinh viên </div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">14</div>
                                <div class="Hiragana">かいしゃいん	</div>
                                <div class="Kanji">会社員	</div>
                                <div class="y_nghia">nhân viên công ty
                                </div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">15</div>
                                <div class="Hiragana">~しゃいん</div>
                                <div class="Kanji">社員</div>
                                <div class="y_nghia">nhân viên công ty~  </div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">16</div>
                                <div class="Hiragana">ぎんこういん	</div>
                                <div class="Kanji">銀行員</div>
                                <div class="y_nghia">nhân viên ngân hàng
                                </div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">17</div>
                                <div class="Hiragana">いしゃ</div>
                                <div class="Kanji">医者</div>
                                <div class="y_nghia">bác sĩ</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">18</div>
                                <div class="Hiragana">けんきゅうしゃ</div>
                                <div class="Kanji">研究者</div>
                                <div class="y_nghia"> nhà nghiên cứu</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">19</div>
                                <div class="Hiragana">エンジニア</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">kỹ sư</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">20</div>
                                <div class="Hiragana">だいがく</div>
                                <div class="Kanji">大学	</div>
                                <div class="y_nghia">trường đại học</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">21</div>
                                <div class="Hiragana">びょういん</div>
                                <div class="Kanji">病院</div>
                                <div class="y_nghia">bệnh viện</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">22</div>
                                <div class="Hiragana">でんき</div>
                                <div class="Kanji">電気</div>
                                <div class="y_nghia">Điện, đèn điện</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">23</div>
                                <div class="Hiragana">だれ（どなた）</div>
                                <div class="Kanji">誰</div>
                                <div class="y_nghia">ai (ngài nào, vị nào)</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">24</div>
                                <div class="Hiragana">―さい</div>
                                <div class="Kanji">～歳</div>
                                <div class="y_nghia">tuổi</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">25</div>
                                <div class="Hiragana">なんさい</div>
                                <div class="Kanji">何歳	</div>
                                <div class="y_nghia">mấy tuổi</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">26</div>
                                <div class="Hiragana">はい</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">vâng</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">27</div>
                                <div class="Hiragana">いいえ</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">không</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">28</div>
                                <div class="Hiragana">しつれいですが</div>
                                <div class="Kanji">失礼ですが</div>
                                <div class="y_nghia">Xin lỗi ( khi muốn nhờ ai việc gì đó)</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">29</div>
                                <div class="Hiragana">おなまえは？</div>
                                <div class="Kanji">お名前は	</div>
                                <div class="y_nghia">Bạn tên gì?</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">30</div>
                                <div class="Hiragana">はじめまして。</div>
                                <div class="Kanji">初めて</div>
                                <div class="y_nghia">	chào lần đầu gặp nhau</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">31</div>
                                <div class="Hiragana">どうぞよろしく[おねがいします]。</div>
                                <div class="Kanji">どうぞよろしく「お願いします」。</div>
                                <div class="y_nghia">rất hân hạnh được làm quen</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">32</div>
                                <div class="Hiragana">こちらは～さんです。</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">đây là ngài</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">33</div>
                                <div class="Hiragana">~からきました。</div>
                                <div class="Kanji">~から来ました</div>
                                <div class="y_nghia">đến từ ~
                                </div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">34</div>
                                <div class="Hiragana">アメリカ	</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Mỹ</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">35</div>
                                <div class="Hiragana">イギリス</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Anh</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">36</div>
                                <div class="Hiragana">インド</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Ấn Độ</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">37</div>
                                <div class="Hiragana">インドネシア</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Indonesia</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">38</div>
                                <div class="Hiragana">かんこく</div>
                                <div class="Kanji">韓国</div>
                                <div class="y_nghia">Hàn quốc</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">39</div>
                                <div class="Hiragana">タイ</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Thái Lan</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">40</div>
                                <div class="Hiragana">ちゅうごく</div>
                                <div class="Kanji">中国</div>
                                <div class="y_nghia">Trung Quốc</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">41</div>
                                <div class="Hiragana">ドイツ</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Đức</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">42</div>
                                <div class="Hiragana">にほん</div>
                                <div class="Kanji">日本</div>
                                <div class="y_nghia">Nhật</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">43</div>
                                <div class="Hiragana">フランス</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Pháp</div>
                            </div>
                            <div class="text" id="item_1">
                                <div class="STT">44</div>
                                <div class="Hiragana">ブラジル</div>
                                <div class="Kanji"></div>
                                <div class="y_nghia">Brazil</div>
                            </div>
                            <div class="text" id="item_2">
                                <div class="STT">45</div>
                                <div class="Hiragana">さくらだいがく</div>
                                <div class="Kanji">さ‌く‌ら‌大‌学</div>
                                <div class="y_nghia">Trường ĐH Sakura (Hoa Anh Đào)</div>
                            </div>
                            
                        </div>

                        <div class="Tro_tu">
                            <h3>2. Trợ từ trong tiếng Nhật: は、も、の、か、.</h3>
                            <div class="text" style="margin-top: 30px;">
                                Khác với tiếng Viêt, tiếng Nhật là thứ ngôn ngữ chắp dính. Các từ hoặc ngữ có thể tách rời và được nối với nhau bởi những trợ từ. Có nhiều loại trợ từ và cách sử dụng của chúng rất đa dạng. Chính nhờ các trợ từ này mà thứ tự của các thành phần trong một câu của tiếng Nhật có thể được thay đổi dễ dàng mà không làm thay đổi ngữ nghĩa của câu. Trong bài 1, chúng ta sẽ gặp 4 trợ từ là は、も、の、か…
                            </div>
                        </div>

                        <div class="Cau_truc">
                            <h3>3. N1 は N2 です N1 là N2.</h3>
                            <div class="text" style="margin-top: 30px;">
                                Trợ từ  は được dùng sau N1 để biểu thị N1 là chủ đề của câu. <br>
                                です được dùng ở cuối câu khẳng định thì hiện tại dạng  “ N1 là N2” và thể hiện sự tôn trọng, lịch sự đối với người nghe.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例1:
                                </div>
                                <div class="text">
                                    わたし は がくせい です。 <br>
                                    Tôi là sinh viên ( Lưu ý: Trợ từ は không có nghĩa là “là” )
                                </div>
                            </div>
                        </div>

                        <div class="Cau_truc">
                            <h3>4. N1 は N2 じゃ ありません</h3>
                            <div class="text" style="margin-top: 30px;">
                                じゃ ありません là dạng phủ định của です.Đây là cách nói được sử dụng trong giao tiếp hội thoại hàng ngày. Khi viết, người ta sử dụng dạng chính thống của nó là では ありません.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例1:
                                </div>
                                <div class="text">
                                    わたし は ぎんこういん じゃ（では）ありません。<br>
                                    Tôi không phải là nhân viên ngân hàng.
                                </div>
                            </div>
                            <div class="note_cmt">
                                ~は ~ですか  ==> ~ là ~ phải không.
                            </div>
                            <div class="text">
                                Trợ từ か được đặt ở cuối câu để biến câu đó thành câu nghi vấn. Khi trả lời cho câu hỏi dạng này, ta phải bắt đầu bằng các từ はい hoặc いいえ.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例2:
                                </div>
                                <div class="text">
                                    A  :  ハイさん   は   いしゃですか。
                                    <br>
                                    Anh Hải là bác sĩ phải không.
                                    <br>
                                    B  :  はい、いしゃです。
                                    <br>
                                    Vâng, anh Hải là bác sĩ.
                                </div>
                                <br>
                                <div class="note_header">
                                    例3:
                                </div>
                                <div class="text">
                                    A  :  やまださん は かいしゃいん ですか。
                                    <br>
                                    Anh Yamada là nhân viên công ty phải không.
                                    <br>
                                    B  :  いいえ、かいしゃいんじゃ ありません。ぎんこういんです。
                                    <br>
                                    Không, anh Yamada không phải là nhân viên công ty. Anh ấy là nhân viên ngân hàng.
                                </div>
                            </div>
                        </div>

                        <div class="Cau_truc">
                            <h3>5. ～も～です==> ~ cũng là ~</h3>
                            <div class="text" style="margin-top: 30px;">
                                も được sử dụng với tiền đề là khi sự việc mà nó chỉ ra giống với sự việc ở mệnh đề trước.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例1:
                                </div>
                                <div class="text">
                                    わたしは ベトナム人 です。
                                    <br>
                                    Tôi là người Việt Nam.
                                    <br>
                                    アンさん も ベトナム人 です。
                                    <br>
                                    Bạn An cũng là người Việt Nam.
                                </div>
                            </div>
                        </div>

                        <div class="Cau_truc">
                            <h3>6. N1 の N2 です。S は　～さいです ==> S ~ tuổi</h3>
                            <div class="text" style="margin-top: 30px;">
                                Nối 2 danh từ lại với nhau, danh từ trước xác định cho danh từ sau Trong trường hợp này biểu hiện tính sở thuộc, tức là N2 là một bộ phận của N1, thuộc về N1.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例1:
                                </div>
                                <div class="text">
                                    A: 私は なごやだいがくの 学生 です。
                                    <br>
                                    Tôi là sinh viên trường đại học Nagoya.
                                    <br>
                                    B: やまださんは FPTの 社員 です。
                                    <br>
                                    Anh Yamada là nhân viên công ty FPT.
                                </div>
                            </div>
                            <div class="note_cmt">
                                (*) Hỏi Tuổi ～は なんさい/ おいくつ ですか ==>    Mấy tuổi / Bao nhiêu tuổi.
                            </div>
                            <div class="text">
                                - Dùng khi nói về tuổi tác.おいくつですか là cách hỏi lịch sự hơn của なんさいですか.
                            </div>
                            <div class="note_ct">
                                <div class="note_header">
                                    例2:
                                </div>
                                <div class="text">
                                    はなちゃんは 9さい です。
                                    <br>
                                    Bé Hana 9 tuổi.
                                </div>
                                <br>
                                <div class="note_header">
                                    例3:
                                </div>
                                <div class="text">
                                    A: たかひろくんも ９さいですか。
                                    <br>
                                    Bé Takahiro cũng 9 tuổi phải không.
                                    <br>
                                    B: いいえ、たかひろくんは 9さいじゃありません。
                                    <br>
                                    Không, bé Takahiro không phải 9 tuổi đâu.
                                    <br>
                                    A: たかひろくんは なんさいですか。
                                    <br>
                                    Takahiro mấy tuổi rồi.
                                    <br>
                                    B:たかひろくんは ８さいです。
                                    <br>
                                    Takahiro 8 tuổi.
                                </div>
                            </div>
                        </div>

                        <div class="Luyen_tap">
                            <h3>Luyện tập</h3>
                            <div class="header_lt">
                                I. 例：あの方（は）どなたですか。
                            </div>
                            <div class="text_lt">
                                １）A：サントスさんはブラジル人じんです。マリアさん（　　）ブラジル人じんですか。
                                <br>
                                　　B：はい、マリアさん（　　）ブラジル人じんです。
                                <br>
                                　　A：ミラーさん（　　）ブラジル人じんですか。
                                <br>
                                　　B：いいえ、ミラーさん（　　）ブラジル人じんじゃありません。
                                <br>
                                ２）グブタさんはIMC（　　）社員しゃいんです。
                            </div>
                            <br>
                            <div class="header_lt">
                                II. 例：あなたは会社員ですか。…はい、会社です。
                            </div>
                            <div class="text_lt">
                                １）カリナさんは学生ですか。… はい、＿＿＿＿＿＿＿＿＿＿＿
                                <br>
                                ２）ワンさんも学生ですか。… いいえ、＿＿＿＿＿＿＿＿＿＿＿
                                <br>
                                ３）あの方は＿＿＿＿＿＿＿＿＿。… やまださんです。
                                <br>
                                ４）これは＿＿＿＿＿＿＿＿＿＿。… はい、わたしのです。
                            </div>
                            <br>
                            <div class="header_lt">
                                III. 例：あなたは会社員ですか。… はい、会社です。
                            </div>
                            <div class="text_lt">
                                １）それは［だれ、なん］のかばんですか。…［わたし、わたしの］です。
                                <br>
                                ２）［その、それ］はなんのテープですか。… にほんごのテープです。
                                <br>
                                ３）これはあなたのかぎですか。…［あなた、わたし］のじゃありません。
                                <br>
                                ４）これは［しんぶん、なん］ですか。… はい、それはしんぶんです。
                                <br>
                                ５）あの人は［なに、だれ］ですか。… やまださんです。
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
                                        <a href="./../../../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                    </li>
                                    <li>
                                        <a href="./../../../socap/minna/minna.php">Minna sơ cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../../socap/kanji/kanji.php">Hán tự</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="#">Trung cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../../../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../../trungcap/kanji/kanji_2.php">Hán tự</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../../N5/N5.php">N5</a>
                                    </div>
                                    <li>
                                        <a href="./../../../N5/N5.php">Từ vựng, ngữ pháp N5</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../../N4/N4.php">N4</a>
                                    </div>
                                    <li>
                                        <a href="./../../../N4/N4.php">Từ vựng, ngữ pháp N4</a>
                                    </li>
                                
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../../N3/N3.php">N3</a>
                                    </div>
                                    <li>
                                        <a href="./../../../N3/N3.php">Từ vựng, ngữ pháp N3</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../../N2/N2.php">N2</a>
                                    </div>
                                    <li>
                                        <a href="./../../../N2/N2.php">Từ vựng, ngữ pháp N2</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../../N1/N1.php">N1</a>
                                    </div>
                                    <li>
                                        <a href="./../../../N1/N1.php">Từ vựng, ngữ pháp N1</a>
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