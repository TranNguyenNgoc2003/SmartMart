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
    $customer = array(); 
    if (isset($_GET['id'])) {
        $hantu_id = $_GET['id'];
    
        $sqlcheck_item = "SELECT itemkanji.id, item, hanTu, kunyomi, onyomi, soNetChu, yNghia, imgItem, vd_1, vd_2, vd_3, vd_4, vd_5, level_itemKanji FROM itemkanji
        JOIN level_kanji ON itemkanji.level_kanji_id = level_kanji.id
        WHERE itemkanji.id = '$hantu_id'";

        $resultcheck_item = $conn->query($sqlcheck_item);
    
        if ($resultcheck_item->num_rows > 0) {
            $customer = $resultcheck_item->fetch_assoc();
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
                <h2>Sửa thông tin Kanji</h2>
                <form method="post" action="update_item.php">
                    <input type="hidden" name="customer_id" value="<?php echo $customer['id']; ?>">
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Level: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="level_kanji"
                            id="level_kanji"
                            value="<?php echo $customer['level_itemKanji']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Kanji: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="item"
                            id="item"
                            value="<?php echo $customer['item']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Hán tự: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="hanTu"
                            id="hanTu"
                            value="<?php echo $customer['hanTu']; ?>"
                        />  
                    </div>
                    
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Kunyomi:  </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="kunyomi"
                            id="kunyomi"
                            value="<?php echo $customer['kunyomi']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Onyomi:  </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="Onyomi"
                            id="Onyomi"
                            value="<?php echo $customer['onyomi']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Số nét chữ:  </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="soNetChu"
                            id="soNetChu"
                            value="<?php echo $customer['soNetChu']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Ý Nghĩa: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="yNghia"
                            id="yNghia"
                            value="<?php echo $customer['yNghia']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Hình ảnh: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="imgItem"
                            id="imgItem"
                            value="<?php echo $customer['imgItem']; ?>"
                        />  
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="" class="form-label">Ví dụ: </label>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="vd_1"
                            id="vd_1"
                            value="<?php echo $customer['vd_1']; ?>"
                        />  <br>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="vd_2"
                            id="vd_2"
                            value="<?php echo $customer['vd_2']; ?>"
                        />  <br>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="vd_3"
                            id="vd_3"
                            value="<?php echo $customer['vd_3']; ?>"
                        />  <br>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="vd_4"
                            id="vd_4"
                            value="<?php echo $customer['vd_4']; ?>"
                        />  <br>
                        <input
                            type="text"
                            class="form-control"
                            style="width: 300px;"
                            name="vd_5"
                            id="vd_5"
                            value="<?php echo $customer['vd_5']; ?>"
                        />  
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                        style="background-color: rgb(0, 113, 199); border: none;"
                    >
                        Cập nhật
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>