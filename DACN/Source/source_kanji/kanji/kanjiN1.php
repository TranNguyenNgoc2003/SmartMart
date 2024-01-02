<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dacn";

    $conn = new mysqli($localhost,$username,$password,$dbname);

    if($conn->connect_error){
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $result = null;
    $check = null;
    $item = "";
    $hanTu = "";
    $kunyomi = "";
    $onyomi = "";
    $soNetChu = "";
    $yNghia = "";
    $imgItem = "";
    $vd_1 = "";
    $vd_2 = "";
    $vd_3 = "";
    $vd_4 = "";
    $vd_5 = "";
    $sql_item = "SELECT item,hanTu FROM itemKanji
        WHERE level_kanji_id like '1';";

    $sql = "SELECT * FROM itemKanji
        WHERE level_kanji_id like '1';";

    $check = $conn->query($sql_item);
    $result = $conn->query($sql);

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="kanji.css">
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
                            <a href="./../bo_thu/bo_thu.php">214 bộ thủ</a>
                            <hr>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="color: navy;" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kanji</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./kanjiN5.php">N5</a>
                                <a class="dropdown-item" href="./kanjiN4.php">N4</a>
                                <a class="dropdown-item" href="./kanjiN3.php">N3</a>
                                <a class="dropdown-item" href="./kanjiN2.php">N2</a>
                                <a class="dropdown-item" href="./kanjiN1.php">N1</a>

                            </div>
                            <hr>
                        </li>
                    </ul>
                    
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">

                <div class="content_number-page">
                    <h3 style="padding-top: 20px; text-align: center;">Bộ chữ cái Hán tự N1</h3>
                    <div class="content">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php if (!is_null($check)): ?>
                                <?php $count=0; ?>
                                <?php while ($row = $check->fetch_assoc()): ?>
                                    <?php $count++; ?>
                                    <li class="nav-item list_item" role="presentation">
                                        <button class="nav-link <?php if($count === 1){echo "active";} ?> item" id="<?php echo $item = $row['item']."-tab"; ?>" data-bs-toggle="tab" data-bs-target="<?php echo "#".$item = $row['item']; ?>" type="button" role="tab" aria-controls="<?php echo $item = $row['item']; ?>" aria-selected="<?php if($count === 1){echo "true";}else{echo "false";} ?>">
                                            <div class="itemHanTu">
                                                <?php echo $item = $row['item']; ?>
                                            </div>
                                            <div class="hanTu">
                                                <?php echo $hanTu = $row['hanTu']; ?>
                                            </div>
                                        </button>
                                    </li>
                                    <?php if($count === 60){break;} ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php if (!is_null($result)): ?>
                                <?php $count=0; ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <?php $count++; ?>
                                    <div class="tab-pane <?php if($count === 1){echo "active";} ?>" id="<?php echo $item=$row['item']; ?>" role="tabpanel" aria-labelledby="<?php echo $item=$row['item']."-tab" ?>"> 
                                        <div style="display: flex;">
                                            <div class="left">
                                                <div class="item_HanTu">
                                                    <div class="title_item">
                                                        Hán tự:
                                                    </div>
                                                    <div style="margin-top: 5px;">
                                                        <span style="color: blue;">
                                                            <?php echo $item = $row['item']; ?>
                                                        </span>
                                                        <span>
                                                            <?php echo " - ". $hanTu = $row['hanTu']; ?>
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item_Kunyomi">
                                                    <div class="title_item">
                                                        Kunyomi:
                                                    </div>
                                                    <span style="color: red; margin-top: 5px;">
                                                        <?php echo $kunyomi = $row['kunyomi']; ?>
                                                    </span>
                                                </div>
                                                <div class="item_Onyomi">
                                                    <div class="title_item">
                                                        Onyomi:
                                                    </div>
                                                    <span style="color: green; margin-top: 5px;">
                                                        <?php echo $onyomi = $row['onyomi']; ?>
                                                    </span>
                                                </div>
                                                <div class="item_SoNet">
                                                    <div class="title_item">
                                                        Số nét:
                                                    </div>
                                                    <span style="margin-top: 5px;" >
                                                        <?php echo $soNetChu = $row['soNetChu']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="right" style="margin-left: 100px;">
                                                <div class="imgKanji" style="width: 180px;">
                                                    <img style="width: 100%;" src=" <?php echo "./../../image/kanji_jlpt/". $imgItem = $row['imgItem']; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_yNghia" style="margin-top: 10px;">
                                            <div class="title_item">
                                                Nghĩa:
                                            </div>
                                            <span style=" margin-left: 20px;">
                                                <?php echo $yNghia = $row['yNghia']; ?>
                                            </span>
                                        </div>
                                        <div class="item_viDu">
                                            <div class="title_item" style="background-color: white; font-weight: bold;">
                                                Ví dụ:
                                            </div>
                                            <div style=" margin-left: 20px;">
                                                <?php echo $vd_1 = $row['vd_1']."."; ?>
                                            </div>
                                            <div style=" margin-left: 20px;">
                                                <?php echo $vd_2 = $row['vd_2']."."; ?>
                                            </div>
                                            <div style=" margin-left: 20px;">
                                                <?php echo $vd_3 = $row['vd_3']."."; ?>
                                            </div>
                                            <div style=" margin-left: 20px;">
                                                <?php echo $vd_4 = $row['vd_4']."."; ?>
                                            </div>
                                            <div style=" margin-left: 20px;">
                                                <?php echo $vd_5 = $row['vd_5']."."; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($count === 60){break;} ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <nav aria-label="Page navigation" style="width: 60%; display: flex; justify-content: end;">
                      <ul class="pagination" style="margin-right: 15px;">
                        <li class="page-item disabled">
                          <a class="page-link" href="./kanjiN1.php" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="./kanjiN1.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="./kanjiN1-2.php">2</a></li>
                        <li class="page-item">
                          <a class="page-link" href="./kanjiN1-2.php" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
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