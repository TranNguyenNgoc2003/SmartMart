<?php
    session_start();

    $user_email = $_SESSION['user_email'];
    if (!isset($_SESSION['user_email'])) {
        header("Location: ./../../index.php");
        exit();
    }

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dacn";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }
    $name ="";
    $score = 0;
    $level ="";
    $result = null;
    $sql = "SELECT userdata.user_name FROM userdata
        WHERE userdata.user_email = '$user_email'";

    $sqlcheck = "SELECT userdata.user_name, scores.score, level_test.level_formTest
        FROM userdata
        JOIN scores ON userdata.user_id = scores.user_id
        JOIN level_test ON scores.level_test_id =  level_test.id
        WHERE userdata.user_email = '$user_email'";
        
    $result = $conn->query($sql);
    $checkscore = $conn->query($sqlcheck);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $selectedLevel = $_POST['txtlevel_test'];
        $redirectUrl = "./form_test/./form_test_N" . $selectedLevel . ".php";
        header("Location: $redirectUrl");
        exit();
    }
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
    <link rel="stylesheet" href="./JLPT_Test.css">
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
                        <button class="nav-link" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../source_tai_lieu/tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./JLPT_Test.php">JLPT</a>
                            </span>
                        </button>
                    </li>
                </ul>
                
            </div>
            
            
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- JLPT -->
            <div class="tab-pane active" id="JLPT" role="tabpanel" aria-labelledby="JLPT-tab">
                <div class="headerCt container">
                    <i class="fa-solid fa-ranking-star"></i><br>
                    Luyện thi JLPT cùng Nihongo Mastery
                </div>
                <div class="content container">
                    <div class="left col-3">
                        <div class="head_top">THÔNG TIN CÁ NHÂN</div>
                        <div class="info">
                            <div class="avata"><img src="./../image/avata_default.png" alt=""></div>
                            <div class="info_form">
                                <span>Thí sinh</span>
                                <div class="name"><?php echo $name = $row['user_name']; ?></div>
                                <div class="email"><?php echo $user_email; ?></div>
                                <div class="scoreform">
                                    <?php while($row_score = $checkscore->fetch_assoc()): ?>
                                        <span>
                                            <div class="level"> <?php echo "Level ". $level = $row_score['level_formTest'] .":"; ?></div>
                                            <div class="score"> <?php echo $score = $row_score['score']."/100"; ?></div>
                                        </span>
                                        
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <!-- <div class="submit">
                                <button type="submit" class="btn btn-primary">Vào thi ngay</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="right col-9">
                        <form class="form_select_level" style="display: flex; justify-content: end;" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <span style="margin-right: 20px;">
                                <button type="submit" style="border: none; background-color: rgb(0, 199, 199); padding: 9px 20px;" id="search_level" class="btn btn-primary">Vào thi</button>
                            </span>
                            <div style="width: 180px;">
                                <select style="font-size: 16px; border: 1px solid rgb(0, 199, 199);" class="form-select form-select-lg" name="txtlevel_test" id="txtlevel_test">
                                    <option value="5" selected>Trình độ N5</option>
                                    <option value="4">Trình độ N4</option>
                                    <option value="3">Trình độ N3</option>
                                    <option value="2">Trình độ N2</option>
                                    <option value="1">Trình độ N1</option>
                                </select>
                            </div>
                        </form>
                        <div class="item_ct">
                            <span style="font-weight: bold; font-size: 26px; font-style: italic; display: flex; justify-content: center; text-decoration: underline;">CHỌN CẤP ĐỘ THI</span>
                            
                            <div class="link_level_test" style="width: 100%; display: flex; justify-content: space-around;">
                                <?php $i = 5; ?>
                                <?php while($i>0): ?>
                                    <a href="<?php echo "./form_test/./form_test_N".$i.".php" ?>">
                                        <span >
                                            <?php echo "N".$i; ?>
                                        </span>
                                        <div>Vào thi</div>
                                    </a>
                                    <?php if ($i ==3): ?>
                                        </div><div class="link_level_test" style=" margin: auto; width: 70%; display: flex; justify-content: space-around;">
                                    <?php endif; ?>
                                    <?php $i--; ?>
                                <?php endwhile; ?>
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