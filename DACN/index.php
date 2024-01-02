<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./Css/main.css">
</head>
<body>
    <?php
        session_start();
        $localhost = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dacn";

        $value = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            

            $conn = new mysqli($localhost,$username,$password,$dbname);

            if($conn->connect_error){
                die("Kết nối đến cơ sở dữ liệu thất bại: ". $conn->connect_error);
            }

            $user_email = $_POST["txtEmail"];
            $user_password = $_POST["txtPassword"];

            $sql = "SELECT user_email,user_password
                    FROM userdata WHERE user_email='$user_email' AND user_password='$user_password'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $_SESSION['user_email'] = $user_email;
                header("Location: Source/home.php");
                exit();
            }else{
                $value = "Email hoặc mật khẩu không hợp lệ.";
            }
            $conn->close();
        }
    ?>

    <div class="login">
    <div class="welcome" style="width: 350px; margin-top: 60px;">
                <h2 style="margin-left: -50px;"><b>Welcome</b></h2>
                <h4 style="margin-left: 100px;"><b>Nihongo Mastery</b></h4>
            <img src="./image_bground/japan.png" style="width: 100%;" alt="">
        </div>
        <div class="form_login ">
            <h2><b>Login</b></h2>   
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="" class="form-label">Email</label>
                <input type="email"
                class="form-control" name="txtEmail" id="txtEmail" aria-describedby="helpId" placeholder="Type your email*">

                <label for="" class="form-label" style="margin-top: 15px;">Password</label>
                <input type="password"
                class="form-control" name="txtPassword" id="txtPassword" aria-describedby="helpId" placeholder="Type your password*">

                <a style="text-decoration: none; display: flex; justify-content: end;" href="#">
                    <small id="helpId" class="form-text text-muted">
                        Forgot password?
                    </small>
                </a>
                <p style="height: 20px; margin-top: 10px; font-size: 13px; color:red">
                    <?php  echo $value; ?>
                </p>
                <button style="width: 100%; background-color: navy; border-radius: 20px;" type="submit" class="btn btn-primary">Login</button>

                <hr style=" width: 90%; margin: 30px auto; height: 2px; color:  rgb(151, 151, 151);">

                <p style="margin-top: -20px; text-align: center; font-size: 14px;">Or Sign Up Using</p>
                <p style="text-align: center; font-size: 14px;">
                    <a href="./sign_up.php" style=" color: rgb(104, 103, 103)">
                        <b>Sign Up</b>
                    </a>
                </p>
            </form>
        </div>
    </div>    
</body>
</html>