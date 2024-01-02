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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer_id = $_POST['customer_id'];
        $level_test = $_POST['level_test'];
        $question_text = $_POST['question_text'];
        $correct_answer = $_POST['correct_answer'];
        $answer_choices_1 = $_POST['answer_choices_1'];
        $answer_choices_2 = $_POST['answer_choices_2'];
        $answer_choices_3 = $_POST['answer_choices_3'];
        $answer_choices_4 = $_POST['answer_choices_4'];

        
        if($level_test == "N5"){
            $level_test_id = 5;
        }
        if($level_test == "N4"){
            $level_test_id = 4;
        }
        if($level_test == "N3"){
            $level_test_id = 3;
        }
        if($level_test == "N2"){
            $level_test_id = 2;
        }
        if($level_test == "N1"){
            $level_test_id = 1;
        }

        $sql_item = "INSERT INTO formTest (level_test_id,question_text, correct_answer, answer_choices_1, answer_choices_2, answer_choices_3, answer_choices_4)
        VALUES ('$level_test_id','$question_text', '$correct_answer', '$answer_choices_1','$answer_choices_2','$answer_choices_3','$answer_choices_4')";

        
        if ($conn->query($sql_item) === TRUE) {
            header("Location: ./search_item.php");
            exit();

        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    $conn->close();
?>