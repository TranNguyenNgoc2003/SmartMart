<?php
    session_start();

    if (!isset($_SESSION['user_email'])) {
        header("Location: ./../../../index.php");
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

    $user_email = $_SESSION['user_email'];
    $sql_get_user_id = "SELECT user_id FROM userData WHERE user_email = '$user_email'";
    $result_user_id = $conn->query($sql_get_user_id);

    if ($result_user_id->num_rows > 0) {
        $row = $result_user_id->fetch_assoc();
        $user_id = $row['user_id'];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['submit_test'])) {
                $score = 0;

                if (isset($_POST['answer']) && is_array($_POST['answer'])) {
                    foreach ($_POST['answer'] as $question_id => $user_answer) {
                        $question_id = $conn->real_escape_string($question_id);
                        $user_answer = $conn->real_escape_string($user_answer);

                        $sql = "SELECT correct_answer FROM formTest WHERE test_id = $question_id";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $correct_answer = $row['correct_answer'];

                            if ($user_answer === $correct_answer) {
                                $score += 2;
                            }
                        }
                    }
                }

                $sql_check_user_score = "SELECT * FROM scores WHERE (user_id = $user_id) AND (level_test_id = 4)";
                $result_check_user_score = $conn->query($sql_check_user_score);

                if ($result_check_user_score->num_rows > 0) {
                    $update_score_sql = "UPDATE scores SET score = $score WHERE (user_id = $user_id) AND (level_test_id = 4)";
                    if($conn->query($update_score_sql)){
                        header("Location: ./../JLPT_Test.php");
                        exit();
                    }
                } else {
                    $insert_score_sql = "INSERT INTO scores (user_id, score, level_test_id) VALUES ($user_id, $score, 4)";
                    if($conn->query($insert_score_sql)){
                        header("Location: ./../JLPT_Test.php");
                        exit();
                    }
                }
            }
        }

        $sql_select = "SELECT level_formTest, formTest.test_id, formTest.question_text, formTest.correct_answer, formTest.answer_choices_1, formTest.answer_choices_2, formTest.answer_choices_3, formTest.answer_choices_4
        FROM formtest
        JOIN level_test ON level_test.id = formtest.level_test_id
        WHERE level_formTest = 'N4'";

        $result_form = $conn->query($sql_select);

        if (!$result_form) {
            die("Lỗi truy vấn: " . $conn->error);
        }
    } else {
        echo "Không tìm thấy thông tin người dùng.";
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
    <link rel="stylesheet" href="./form_test.css">
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
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../JLPT_Test.php">JLPT</a>
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
                <!-- content -->
                <div class="container content">
                    <h2 style="text-align: center; padding-bottom: 30px;" >Luyện thi JLPT N4</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <?php $stt = 0; while ($row = $result_form->fetch_assoc()): ?>
                            <div class="question" >
                                <div class="stt">
                                    <?php $stt++; echo $stt . ":"; ?>
                                </div>
                                <div class="text_question">
                                    <?php echo $row["question_text"] ?>
                                </div>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="answer[<?php echo $row['test_id']; ?>]" id="answer_<?php echo $stt; ?>_1" value="<?php echo $row["answer_choices_1"]; ?>">
                                <label class="form-check-label" for="answer_<?php echo $stt; ?>_1">
                                    <?php echo $row["answer_choices_1"] ?>
                                </label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="answer[<?php echo $row['test_id']; ?>]" id="answer_<?php echo $stt; ?>_2" value="<?php echo $row["answer_choices_2"]; ?>">
                                <label class="form-check-label" for="answer_<?php echo $stt; ?>_2">
                                    <?php echo $row["answer_choices_2"] ?>
                                </label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="answer[<?php echo $row['test_id']; ?>]" id="answer_<?php echo $stt; ?>_3" value="<?php echo $row["answer_choices_3"]; ?>">
                                <label class="form-check-label" for="answer_<?php echo $stt; ?>_3">
                                    <?php echo $row["answer_choices_3"] ?>
                                </label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="answer[<?php echo $row['test_id']; ?>]" id="answer_<?php echo $stt; ?>_4" value="<?php echo $row["answer_choices_4"]; ?>">
                                <label class="form-check-label" for="answer_<?php echo $stt; ?>_4">
                                    <?php echo $row["answer_choices_4"] ?>
                                </label>
                            </div>
                            <br>
                        <?php endwhile; ?>
                        
                        <!-- submit -->
                        <span style="display: flex; justify-content: end;">
                            <button type="submit" name="submit_test" class="btn btn-primary submit">Gửi</button>
                        </span>
                    </form>
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