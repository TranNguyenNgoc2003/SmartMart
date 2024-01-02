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

    $row = [];

    if (isset($_GET['request']) && isset($_GET['level_rq']) ) {
        $request = $_GET['request'];
        $level_rq = $_GET['level_rq'];

        if (!empty($request)) {
            // Thực hiện truy vấn SQL để tìm kiếm sản phẩm
            $sqlcheck = "SELECT test_id, level_test_id, question_text, correct_answer, answer_choices_1, answer_choices_2, answer_choices_3, answer_choices_4, level_formTest
            FROM formtest
            JOIN level_test ON formtest.level_test_id = level_test.id
            WHERE (question_text LIKE ?) AND (level_formTest = '$level_rq')";
            $stmt = $conn->prepare($sqlcheck);

            if (!empty($request)) {
                $request = "%" . $request . "%";
                $stmt->bind_param("s", $request);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $text_cmt = "<h2>Kết quả tìm kiếm: '$request'</h2>";

                } else {
                    $text_cmt = "<p>Không có kết quả phù hợp.</p>";
                }

                $stmt->close();
            } else {
                $text_cmt = "Lỗi truy vấn: " . $conn->error;
            }
        } else {
            $text_cmt = "<p>Vui lòng nhập từ khóa tìm kiếm.</p>";
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
    <link rel="stylesheet" href="./jlpt.css">
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
                <?php if ($row = $result->fetch_assoc()): ?>
                    <h2><?php echo $text_cmt ?></h2>
                    <br>
                    <div class="left" style="width: 50%;">
                        <div class="info_jlpt">
                            <p >Mã câu hỏi:</p>
                            <span>
                                <?php echo $row['test_id']; ?>
                            </span>
                        </div>
                        <div class="info_jlpt">
                            <p >Câu hỏi:</p>
                            <span style="color: red;">
                                <?php echo $row['question_text']; ?>
                            </span>
                        </div>
                        <div class="info_jlpt">
                            <p >Đáp án đúng:</p>
                            <span style="color: green;" >
                                <?php echo $row['correct_answer']; ?>
                            </span>
                        </div>
                        <div class="info_jlpt">
                            <p >Các đáp án:</p> 
                            <span style="width: 400px;">
                                <?php echo  $row['answer_choices_1']; ?><br>
                                <?php echo  $row['answer_choices_2']; ?><br>
                                <?php echo  $row['answer_choices_3']; ?><br>
                                <?php echo  $row['answer_choices_4']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="del_upd" style=" display: flex; justify-content: center;">
                        <a
                            class="btn btn-primary"
                            style="background-color: rgb(0, 113, 199); border: none;"
                            href="edit_item.php?test_id=<?php echo $row['test_id']; ?>"
                        >
                            Chỉnh Sửa
                        </a>
                        <a 
                            class="btn btn-primary"
                            style="background-color: rgb(0, 113, 199); border: none; margin-left: 20px;"
                            href="delete_item.php?test_id=<?php echo $row['test_id']; ?>"
                        >   
                        Xóa
                        </a>
                    </div>

                <?php else: ?>  
                    <?php echo $text_cmt; ?>
                <?php endif; ?>
            
                
            </div>
        </div>
    </div>
</body>
</html>