<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
    <div class="container-xl">
        <!-- Logo -->
        <div class="row ">
            <div class="col bar">
                <div class="logo">
                    <a href="#">
                        <img src="./image/Nihongo_Master_Logo.png" style="width: 50px;" alt="">

                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end bar">
                <div class="login_search" style="margin-top: 11px; ">
                    <a href="#" style="color: black; font-size: 20px; margin-right: 20px;"><i class="fas fa-search"></i></a>
                    <a href="./user/info/user.php" style="color: black;font-size: 20px;"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
        <!-- Menu Bar -->
        <div class="row menu">
            <div class="col">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Trang_Chu-tab" data-bs-toggle="tab" data-bs-target="#Trang_Chu" type="button" role="tab" aria-controls="Trang_Chu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./home.php">Trang Chủ</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./source_tai_lieu/tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <a style="text-decoration: none; color: black;" href="./source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./source_JLPT/JLPT_Test.php">JLPT</a>
                            </span>
                        </button>
                    </li>
                </ul>
                
            </div>
            
            
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home -->
            <div class="tab-pane active" id="Trang_Chu" role="tabpanel" aria-labelledby="Trang_Chu-tab">
                <div class="menu_bar">
                    <ul>
                        <li>
                            <a style="color: navy;" href="#">Giới thiệu</a>
                            <hr>
                        </li>
                    
                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">
                <!-- Content -->
                <div class="content" style="display: flex;">
                    <!-- Content Left -->
                    <div class="content_left" style="width: 55%;">
                        <div class=" justify-content-center align-items-center g-2">
                            <div class=" gioiThieu">
                                <h4><b>Giới thiệu bài học</b></h4>
                                <div>
                                    <div class="gt_header">
                                        Vỡ lòng
                                    </div>
                                    <div class="gt_text">
                                        Dành cho các bạn mới bắt đầu học tiếng Nhật, học bảng chữ cái Hiragana và Katakana. Các bài luyện đọc, viết, tổng hợp, kiểm tra Hiragana bằng video. Các câu hội thoại cơ bản... Mới bắt đầu học tiếng Nhật ai cũng phải vượt khó phần học này. Nếu thấy khó nhai thì bạn có thể học song song với "Tiếng Nhật Giao Tiếp" sẽ cảm thấy thú vị hơn.
                                        
                                        
                                    </div>
                                </div>
    
                                <br>
                                
                                <div>
                                    <div class="gt_header">
                                        Sơ cấp
                                    </div>
                                    <div class="gt_text">
                                        Sau khi học xong bảng chữ cái và các câu chào hỏi cơ bản, bạn học tiếp giáo trình Minna no Nihongo và tiếng Nhật giao tiếp. 50 bài học Minna no Nihongo chia làm 8 thể loại: Từ vựng, ngữ pháp, luyện đọc, hội thoại, luyện nghe, bài tập, hán tự và kiểm tra. 30 bài học tiếng Nhật giao tiếp giúp bạn phản xạ tốt trong việc nghe và nói tiếng Nhật.
                                        <br>
                                        <ul>
                                            <li>
                                                <a href="./source_tai_lieu/tailieu.php">Minna no Nihongo</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
    
                                <br>
    
                                <div>
                                    <div class="gt_header">
                                        Trung cấp
                                    </div>
                                    <div class="gt_text">
                                        Trước khi học lớp trung cấp bạn ôn lại ngữ pháp ở sơ cấp qua giáo trình 総まとめポイント 20. Sau đó bạn học lần lượt các giáo trình 日本語総まとめ N3 và 日本語総まとめ N2. Bài học chia làm 5 thể loại: Từ vựng, ngữ pháp, hán tự, bài đọc, luyện nghe. Các bài học gips ích cho quá trình ôn luyện N2, N3.
                                        <br>
                                        <ul>
                                            <li>
                                                <a href="./source_tai_lieu/N3/N3.php">日本語総まとめ N3</a>
                                            </li>
                                            <li>
                                                <a href="./source_tai_lieu/N2/N2.php">日本語総まとめ N2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
    
                                <br>
    
                                <div>
                                    <div class="gt_header">
                                        Ôn tập
                                    </div>
                                    <div class="gt_text">
                                        Tổng hợp các kiến thức từ vỡ lòng cho đến trung cấp. Các bài ôn tập tiếng Nhật như chia động từ, cách dùng giới từ... Tổng hợp các cấu trúc ngữ pháp N1, N2, N3, N4, N5,...
                
                                    </div>
                                </div>
    
                                <br>
                            
                                <div>
                                    <div class="gt_header">
                                        Hán tự
                                    </div>
                                    <div class="gt_text">
                                        Các bộ Hán tự trong tiếng Nhật, học cách viết Hán tự bằng Flash, Học Hán tự cùng truyện tranh. Kanji Look and Learn. Tổng hợp 800 Hán tự thường dùng và từ ghép của nó...
                                        <br>
                                        <ul>
                                            <li>
                                                <a href="./source_kanji/bo_thu/bo_thu.php">214 Bộ thủ</a>
                                            </li>
                
                                        </ul>
                                    </div>
                                </div>
    
                                <br>
                                
                                <div>
                                    <div class="gt_header">
                                        Luyện thi
                                    </div>
                                    <div class="gt_text">
                                        Các đề tàu thi năng lực tiếng Nhật của các năm trước. Các bạn có thể bổ sung thêm kiến thức và kinh nhiệm cho các kỳ thi tiếng Nhật.
                                       
                                        <br>
                                        Các bạn có thể cùng trao đổi kinh nghiệm học tập, giao lưu, cùng nhau cố gắng... Trao đổi cho nhau kinh nghệm sống ở Nhật, du học, làm thêm, thi cử, việc làm...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Right -->
                    <div class="content_right" style="width: 40%; margin-left: 5%; margin-top: 50px;">
                        <!-- List Menu -->
                        <div class="menu_home ">
                            <div class="row">
                                <div class="col-4">
                                  <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-N1-list" data-bs-toggle="list" href="#list-N1" role="tab" aria-controls="list-N1">Kiến thức N1</a>
                                    <a class="list-group-item list-group-item-action" id="list-N2-list" data-bs-toggle="list" href="#list-N2" role="tab" aria-controls="list-N2">Kiến thức N2</a>
                                    <a class="list-group-item list-group-item-action" id="list-N3-list" data-bs-toggle="list" href="#list-N3" role="tab" aria-controls="list-N3">Kiến thức N3</a>
                                    <a class="list-group-item list-group-item-action" id="list-N4-list" data-bs-toggle="list" href="#list-N4" role="tab" aria-controls="list-N4">Kiến thức N4</a>
                                    <a class="list-group-item list-group-item-action" id="list-N5-list" data-bs-toggle="list" href="#list-N5" role="tab" aria-controls="list-N5">Kiến thức N5</a>
                                  </div>
                                </div>
                                <div class="col-8 list_menu">
                                  <div class="tab-content" id="nav-tabContent" >
                                    <div class="tab-pane fade show active"  id="list-N1" role="tabpanel" aria-labelledby="list-N1-list">
                                        <!-- Some borders are removed -->
                                        <ul class="list-group list-group-flush" style="text-align: start;">
                                            <li class="list-group-item"><a href="./source_tai_lieu/N1/N1.php">Tài liệu N1</a></li>
                                            <li class="list-group-item"><a href="./source_kanji/kanji/kanjiN1.php">Kanji N1</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-N2" role="tabpanel" aria-labelledby="list-N2-list">
                                       <!-- Some borders are removed -->
                                       <ul class="list-group list-group-flush" style="text-align: start;">
                                            <li class="list-group-item"><a href="./source_tai_lieu/N2/N2.php">Tài liệu N2</a></li>
                                            <li class="list-group-item"><a href="./source_kanji/kanji/kanjiN2.php">Kanji N2</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-N3" role="tabpanel" aria-labelledby="list-N3-list">
                                        <!-- Some borders are removed -->
                                        <ul class="list-group list-group-flush" style="text-align: start;">
                                            <li class="list-group-item"><a href="./source_tai_lieu/N3/N3.php">Tài liệu N3</a></li>
                                            <li class="list-group-item"><a href="./source_kanji/kanji/kanjiN3.php">Kanji N3</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-N4" role="tabpanel" aria-labelledby="list-N4-list">
                                        <!-- Some borders are removed -->
                                        <ul class="list-group list-group-flush" style="text-align: start;">
                                            <li class="list-group-item"><a href="./source_tai_lieu/N4/N4.php">Tài liệu N4</a></li>
                                            <li class="list-group-item"><a href="./source_kanji/kanji/kanjiN4.php">Kanji N4</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-N5" role="tabpanel" aria-labelledby="list-N5-list">
                                        <!-- Some borders are removed -->
                                        <ul class="list-group list-group-flush" style="text-align: start;">
                                            <li class="list-group-item"><a href="./source_tai_lieu/N5/N5.php">Tài liệu N5</a></li>
                                            <li class="list-group-item"><a href="./source_kanji/kanji/kanjiN5.php">Kanji N5</a></li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <hr class="container d-none d-lg-inline-block">
                        <!-- Slide -->
                        <div class="container d-none d-lg-inline-block "  >
                            <div class="row">
                                <div class="col">
                                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                                            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                                            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                                            <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="./image/Slide_index/Slide_index_1.png" class="w-100 d-block" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./image/Slide_index/Slide_index_2.png" class="w-100 d-block" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./image/Slide_index/Slide_index_3.png" class="w-100 d-block" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./image/Slide_index/Slide_index_4.png" class="w-100 d-block" alt="Fourth slide">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="container d-none d-lg-inline-block">
                        <!-- Video -->
                        <div class="col d-none d-md-inline-block">
                            <video controls="control" style="width: 100%;">
                                <source src="./Video/Cảnh đẹp đất nước Nhật Bản Phóng tầm mắt đắm tâm hồn.mp4" type="video/mp4">
                            </video>
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
                        <img src="./image/Nihongo_Master_Logo.png" style="width: 80px;" alt="">
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
                <img src="./image/image_bg/Bar background.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>