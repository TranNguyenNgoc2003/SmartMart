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
        $level_kanji = $_POST['level_kanji'];
        $item = $_POST['item'];
        $hanTu = $_POST['hanTu'];
        $kunyomi = $_POST['kunyomi'];
        $onyomi = $_POST['Onyomi'];
        $soNetChu = $_POST['soNetChu'];
        $yNghia = $_POST['yNghia'];
        $imgItem = $_POST['imgItem'];
        $vd_1 = $_POST['vd_1'];
        $vd_2 = $_POST['vd_2'];
        $vd_3 = $_POST['vd_3'];
        $vd_4 = $_POST['vd_4'];
        $vd_5 = $_POST['vd_5'];

        
        if($level_kanji == "N5"){
            $level_kanji_id = 5;
        }
        if($level_kanji == "N4"){
            $level_kanji_id = 4;
        }
        if($level_kanji == "N3"){
            $level_kanji_id = 3;
        }
        if($level_kanji == "N2"){
            $level_kanji_id = 2;
        }
        if($level_kanji == "N1"){
            $level_kanji_id = 1;
        }

        $sql_item = "INSERT INTO itemKanji(level_kanji_id,item, hanTu,kunyomi,onyomi,soNetChu,yNghia,imgItem,vd_1,vd_2,vd_3,vd_4,vd_5) VALUES ('$level_kanji_id','$item','$hanTu','$kunyomi','$onyomi','$soNetChu','$yNghia','$imgItem','$vd_1', '$vd_2', '$vd_3', '$vd_4', '$vd_5')";

        
        if ($conn->query($sql_item) === TRUE) {
            header("Location: ./search_item.php");
            exit();

        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    $conn->close();
?>