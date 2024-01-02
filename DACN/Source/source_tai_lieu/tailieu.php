<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="tailieu.css">
</head>
<body>
    <div class="container-xl">
        <!-- Logo -->
        <div class="row ">
            <div class="col bar">
                <div class="logo">
                    <a href="#">
                        <img src="./../image/Nihongo_Master_Logo.png" style="width: 50px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end bar">
                <div class="login_search" style="margin-top: 11px; ">
                    <a href="#" style="color: black; font-size: 20px; margin-right: 20px;"><i class="fas fa-search"></i></a>
                    <a href="./../user/info/user.php" style="color: black;font-size: 20px;"><i class="fas fa-user"></i></a>
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
                                <a style="text-decoration: none; color: black;" href="./../home.php">Trang Chủ</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="#">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <a style="text-decoration: none; color: black;" href="./../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../source_JLPT/JLPT_Test.php">JLPT</a>
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
                                <a class="dropdown-item" href="./socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                <a class="dropdown-item" href="./socap/minna/minna.php">Minna sơ cấp</a>
                                <a class="dropdown-item" href="./socap/kanji/kanji.php">Hán tự</a>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trung cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./trungcap/minna/minna_2.php">Minna trung cấp</a>
                                <a class="dropdown-item" href="./trungcap/kanji/kanji_2.php">Hán tự</a> 
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="./N5/N5.php"> N5</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./N4/N4.php">N4</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./N3/N3.php">N3</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./N2/N2.php">N2</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./N1/N1.php">N1</a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">

                <div class="content" style="display: flex; justify-content: space-between;">
                    <div class="content_left" style="width: 100%;">
                        <!-- slide -->
                        <div class="slide_TL col-11" style="margin: 0 auto;">
                            <div id="slide" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                                    <li data-bs-target="#slide" data-bs-slide-to="1" aria-label="Second slide"></li>
                                    <li data-bs-target="#slide" data-bs-slide-to="2" aria-label="Third slide"></li>
                                    <li data-bs-target="#slide" data-bs-slide-to="3" aria-label="Fourth slide"></li>
                                    <li data-bs-target="#slide" data-bs-slide-to="4" aria-label="Fifth slide"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="./../image/Slide_tl/Slide_tl_1.png" class="w-100 d-block" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./../image/Slide_tl/Slide_tl_2.png" class="w-100 d-block" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./../image/Slide_tl/Slide_tl_3.png" class="w-100 d-block" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./../image/Slide_tl/Slide_tl_4.png" class="w-100 d-block" alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./../image/Slide_tl/Slide_tl_5.png" class="w-100 d-block" alt="Fifth slide">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
    
                        <!-- Content -->
                        <div class="container" style=" margin-top: 30px; padding: 0px 20px 0px 20px; border: 2px solid rgba(103, 101, 101, 0.512); border-radius: 4px;">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="N5" style="border: 1px solid rgba(103, 101, 101, 0.512); border-radius: 4px; margin-top: 20px;">
                                    <a href="./N5/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red; margin-top: 15px;">まで</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">まで => Đến khi</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(255, 0, 0, 0.837); border-radius: 2px; color: white;">N5</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Kỳ hạn</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./N5/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red">てはだめだ</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">てはだめだ => Không được</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(255, 0, 0, 0.837); border-radius: 2px; color: white;">N5</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Cấm chỉ</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <div class="show" style="text-align: center;">
                                        <a href="./N5/N5.php" style="font-size: 18px; color: rgba(0, 0, 0, 0.785);">
                                            Xem thêm
                                        </a>
                                    </div>
                                    
                                </div>
    
                                <div class="N4" style="border: 1px solid rgba(103, 101, 101, 0.512); border-radius: 4px; margin-top: 20px;">
                                    <a href="./N4/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red; margin-top: 15px;">ではなかったか</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">ではなかったか => Hồi đó có lẽ...(Suy đoán)</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(67, 110, 3, 0.837); border-radius: 2px; color: white;">N4</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Suy đoán</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./N4/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red">てもみないで</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">てもみないで => Chưa thử...thì...</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(67, 110, 3, 0.837); border-radius: 2px; color: white;">N4</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Nhấn mạnh</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <div class="show" style="text-align: center;">
                                        <a href="./N4/N4.php" style="font-size: 18px; color: rgba(0, 0, 0, 0.785);">
                                            Xem thêm
                                        </a>
                                    </div>
                                    
                                </div>
    
                                <div class="N3" style="border: 1px solid rgba(103, 101, 101, 0.512); border-radius: 4px; margin-top: 20px;">
                                    <a href="./N3/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red; margin-top: 15px;">が～なら～も～だ</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">が～なら～も～だ => ...như thế nào thì... cũng như thế nấy</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(3, 110, 101, 0.837); border-radius: 2px; color: white;">N3</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Đánh giá</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./N3/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red">なん～ても</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">なん～ても => Bao nhiêu...vẫn...</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(3, 110, 101, 0.837); border-radius: 2px; color: white;">N3</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Bất biến</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <div class="show" style="text-align: center;">
                                        <a href="./N3/N3.php" style="font-size: 18px; color: rgba(0, 0, 0, 0.785);">
                                            Xem thêm
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                <div class="N2" style="border: 1px solid rgba(103, 101, 101, 0.512); border-radius: 4px; margin-top: 20px;">
                                    <a href="./N2/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red; margin-top: 15px;">～ごとに</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">～ごとに => Cứ ... lại ...</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(110, 85, 3, 0.882); border-radius: 2px; color: white;">N2</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Lặp lại, thói quen</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./N2/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red">どうやら (こうやら)</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">どうやら (こうやら) => Rồi cũng đã</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(110, 85, 3, 0.882); border-radius: 2px; color: white;">N2</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Kết quả</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <div class="show" style="text-align: center;">
                                        <a href="./N2/N2.php" style="font-size: 18px; color: rgba(0, 0, 0, 0.785);">
                                            Xem thêm
                                        </a>
                                    </div>
                                    
                                </div>
    
                                <div class="N1" style="border: 1px solid rgba(103, 101, 101, 0.512); border-radius: 4px; margin-top: 20px;">
                                    <a href="./N1/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red; margin-top: 15px;">～せめてもの</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">～せめてもの => ～Kể ra cũng còn may là..., ít ra là...</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(63, 62, 62, 0.607); border-radius: 2px; color: white;">N1</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">So sánh</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./N1/bai_1/minna-bai-1.php" style="text-decoration: none;">
                                        <p style=" color:red">には…なり</p>
                                        <p style="color:rgba(0, 0, 0, 0.785);">には…なり => Đối với ... cũng có cái tương xứng với nó</p>
                                        <div class="id_TL" style="display: flex;">
                                            <p style=" padding: 0px 7px 0px 7px; background-color: rgba(63, 62, 62, 0.607); border-radius: 2px; color: white;">N2</p>
                                            <p style=" margin-left: 10px; color:rgba(0, 0, 0, 0.785);">Liên quan, tương ứng</p>
                                        </div>
                                    </a>
                                    <hr>
                                    <div class="show" style="text-align: center;">
                                        <a href="./N1/N1.php" style="font-size: 18px; color: rgba(0, 0, 0, 0.785);">
                                            Xem thêm
                                        </a>
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
                                        <a href="./socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                    </li>
                                    <li>
                                        <a href="./socap/minna/minna.php">Minna sơ cấp</a>
                                    </li>
                                    <li>
                                        <a href="./socap/kanji/kanji.php">Hán tự</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="#">Trung cấp</a>
                                    </div>
                                    <li>
                                        <a href="./trungcap/minna/minna_2.php">Minna trung cấp</a>
                                    </li>
                                    <li>
                                        <a href="./trungcap/kanji/kanji_2.php">Hán tự</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./N5/N5.php">N5</a>
                                    </div>
                                    <li>
                                        <a href="./N5/N5.php">Từ vựng, ngữ pháp N5</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./N4/N4.php">N4</a>
                                    </div>
                                    <li>
                                        <a href="./N4/N4.php">Từ vựng, ngữ pháp N4</a>
                                    </li>
                                
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./N3/N3.php">N3</a>
                                    </div>
                                    <li>
                                        <a href="./N3/N3.php">Từ vựng, ngữ pháp N3</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./N2/N2.php">N2</a>
                                    </div>
                                    <li>
                                        <a href="./N2/N2.php">Từ vựng, ngữ pháp N2</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./N1/N1.php">N1</a>
                                    </div>
                                    <li>
                                        <a href="./N1/N1.php">Từ vựng, ngữ pháp N1</a>
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
                        <img src="./../image/Nihongo_Master_Logo.png" style="width: 80px;" alt="">
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
                <img src="./../image/image_bg/Bar background.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>