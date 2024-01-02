<?php
    
    session_start();

    $admin_email = $_SESSION['admin_email'];
    if (!isset($_SESSION['admin_email'])) {
        header("Location: ./../index.php");
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
    $admin ="";
    $sqladmin = "SELECT * FROM admindata WHERE admin_email='$admin_email'";
    $resultad = $conn->query($sqladmin);
    if ($resultad->num_rows > 0) {
        $admin = $resultad->fetch_assoc();
    }

    $customer = [];

    if (isset($_GET['hantu']) && isset($_GET['level_kj']) ) {
        $hantu = $_GET['hantu'];
        $level_kj = $_GET['level_kj'];

        $sqlcheck = "SELECT itemkanji.id, item, hanTu, kunyomi, onyomi, soNetChu, yNghia, imgItem, vd_1, vd_2, vd_3, vd_4, vd_5, level_itemKanji FROM itemkanji
            JOIN level_kanji ON itemkanji.level_kanji_id = level_kanji.id
            WHERE (hanTu = '$hantu') AND (level_itemKanji = '$level_kj')";
        $resultcheck = $conn->query($sqlcheck);

        if ($resultcheck->num_rows > 0) {
            $customer = $resultcheck->fetch_assoc();
        }
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
    <link rel="stylesheet" href="./kanji.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div id="bg-left" style="border-top-right-radius: 18px;">
                <div class="logo" >
                    <div class="img_logo">
                        <a href="#">
                            <img src="./../Image/Nihongo_Master_Logo.png" alt="">
                        </a>
                    </div>
                    <div class="name_logo">
                        <h4>
                            <a href="#"><span>Nihongo </span><br> <span style="display: flex; justify-content: end; margin-right: 30px;">Mastery</span></a>
                        </h4>   
                    </div>
                </div>
            </div>
            
           

            <div class="user_name ">
                <a href="./info.php">
                    <div class="name" style="font-weight: bold;  margin-right: 10px; font-size: 18px;">
                        <?php echo $admin['admin_name']; ?>
                    </div>
                    <i class="far fa-user-circle"></i>
                </a>
            </div>
        </div>
        <div class="content_menu" style="display: flex; ">
            <div id="bg-left" style="padding-bottom: 100px; border-bottom-left-radius: 18px;">
                <div class="list_menu">
                    <div class="line_menu">
                        <hr style="height: 2px; margin-top: 13px;">
                        <div class="text" style="width: 800px;">Quản lý khách hàng</div>
                        <hr style="height: 2px; margin-top: 13px;">
                    </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../khachhang/search_khachhang.php">
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="text">
                                    Thông tin khách hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../scoreJLPT/score.php">
                                <div class="icon">
                                    <i class="fa-solid fa-ranking-star"></i>
                                </div>
                                <div class="text">
                                    Kết quả thi JLPT
                                </div>
                            </a>
                        </li>
                        
                </div>
                <div class="list_menu" style="margin-top: 20px;">
                        <div class="line_menu">
                            <hr style="height: 2px; margin-top: 13px;">
                            <div class="text" style="width: 800px;">Quản lý Website</div>
                            <hr style="height: 2px; margin-top: 13px;">
                        </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../kanji/search_item.php">
                                <div class="icon">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <div class="text">
                                    Dữ liệu Kanji
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../JLPT/search_item.php">
                                <div class="icon">
                                    <i class="fa-regular fa-file-lines"></i>
                                </div>
                                <div class="text">
                                    Dữ liệu JLPT
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="list_menu" style="margin-top: 20px;">
                        <div class="line_menu">
                            <hr style="height: 2px; margin-top: 13px;">
                            <div class="text" style="width: 800px;">Đăng xuất</div>
                            <hr style="height: 2px; margin-top: 13px;">
                        </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../logout/logout.php">
                                <div class="icon">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </div>
                                <div class="text">
                                Đăng xuất
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                
                
            </div>
            <!-- content -->
            <div class="container content">
                <?php if (!empty($customer)): ?>
                    <h2>Thông tin kí tự Kanji</h2>
                    <br>
                    <div style="display: flex;">
                        <div class="left" style="width: 50%;">
                            <div class="info_kanji">
                                <p >Mã kí tự:</p>
                                <span>
                                    <?php echo $customer['id']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Kanji:</p> 
                                <span>
                                    <?php echo $customer['item']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Hán tự:</p> 
                                <span>
                                    <?php echo $customer['hanTu']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Kunyomi:</p> 
                                <span>
                                    <?php echo  $customer['kunyomi']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Onyomi:</p> 
                                <span>
                                    <?php echo $customer['onyomi']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Số nét chữ:</p> 
                                <span>
                                    <?php echo $customer['soNetChu']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Ý nghĩa:</p> 
                                <span style="width: 400px;">
                                    <?php echo  $customer['yNghia']; ?>
                                </span>
                            </div>
                            <div class="info_kanji">
                                <p >Ví dụ:</p> 
                                <span>
                                    <?php echo "1". $customer['vd_1']; ?><br>
                                    <?php echo "2". $customer['vd_2']; ?><br>
                                    <?php echo "3". $customer['vd_3']; ?><br>
                                    <?php echo "4". $customer['vd_4']; ?><br>
                                    <?php echo "5". $customer['vd_5']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="info_kanji" >
                                <span>
                                    <img src="./../../Source/image/kanji_jlpt/<?php echo  $customer['imgItem']; ?>" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="del_upd" style=" display: flex; justify-content: center;">
                        <a
                            class="btn btn-primary"
                            style="background-color: rgb(0, 113, 199); border: none;"
                            href="edit_item.php?id=<?php echo $customer['id']; ?>"
                        >
                            Chỉnh Sửa
                        </a>
                        <a 
                            class="btn btn-primary"
                            style="background-color: rgb(0, 113, 199); border: none; margin-left: 20px;"
                            href="delete_item.php?id=<?php echo $customer['id']; ?>"
                        >   
                        Xóa
                        </a>
                    </div>

                <?php else: ?>  
                    <?php echo "Không tìm thấy kí tự Kanji này."; ?>
                <?php endif; ?>
            
                
            </div>
        </div>
    </div>
</body>
</html>