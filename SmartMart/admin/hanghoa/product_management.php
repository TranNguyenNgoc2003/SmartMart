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
    $dbname = "sieuthi";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }
    $admin ="";
    $sqladmin = "SELECT HoTen, ChucVu FROM NhanVien WHERE Email='$admin_email'";
    $resultadmin = $conn->query($sqladmin);
    if ($resultadmin->num_rows > 0) {
        $admin = $resultadmin->fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btnSearchProduct'])) {
            $searchKeyword = $_POST['searchKeyword'];
    
            $sqlSearchProduct = "SELECT * FROM QuanLyHangHoa WHERE TenHH LIKE '%$searchKeyword%'";
            $result = $conn->query($sqlSearchProduct);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Xử lý thêm sản phẩm
        if (isset($_POST['btnAddProduct'])) {
            $maNV = $_POST['maNV'];
            $tenHH = $_POST['tenHH'];
            $soLuong = $_POST['soLuong'];
            $gia = $_POST['gia'];
            $imgSP = $_POST['imgSP'];
            $dvt = $_POST['dvt'];
            $vat = $_POST['vat'];
            $maNCC = $_POST['maNCC'];

            $sqlAddProduct = "INSERT INTO QuanLyHangHoa (MaNV, TenHH, SoLuong, Gia, ImgSP, DVT, VAT, MaNCC) 
                              VALUES ('$maNV', '$tenHH', $soLuong, $gia, '$imgSP', '$dvt', $vat, $maNCC)";

            if ($conn->query($sqlAddProduct) === TRUE) {
                echo "Thêm sản phẩm thành công";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }

        // Xử lý xoá sản phẩm
        if (isset($_POST['btnDeleteProduct'])) {
            $maHHToDelete = $_POST['maHHToDelete'];

            $sqlDeleteProduct = "DELETE FROM QuanLyHangHoa WHERE MaHH = $maHHToDelete";

            if ($conn->query($sqlDeleteProduct) === TRUE) {
                echo "Xoá sản phẩm thành công";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
        
            // Xử lý cập nhật sản phẩm
            if (isset($_POST['btnUpdateProduct'])) {
                $maHHToUpdate = $_POST['maHHToUpdate'];
                $newTenHH = $_POST['newTenHH'];
                $newSoLuong = $_POST['newSoLuong'];
                $newGia = $_POST['newGia'];
                // Thêm các biến cho các trường cần cập nhật khác
        
                $sqlUpdateProduct = "UPDATE QuanLyHangHoa 
                                     SET TenHH = '$newTenHH', SoLuong = $newSoLuong, Gia = $newGia 
                                     WHERE MaHH = $maHHToUpdate";
        
                if ($conn->query($sqlUpdateProduct) === TRUE) {
                    echo "Cập nhật sản phẩm thành công";
                } else {
                    echo "Lỗi: " . $conn->error;
                }
            }
        }
    }

    // Lấy danh sách sản phẩm
    $sqlGetProducts = "SELECT * FROM QuanLyHangHoa";
    $result = $conn->query($sqlGetProducts);

    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Smart Mart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./hanghoa.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div id="bg-left" style="border-top-right-radius: 18px;">
                <div class="logo" >
                    <div class="img_logo">
                        <a href="./../home/home.php">
                            <img src="./../Image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="name_logo">
                        <h3>
                            <a href="./../home/home.php">Smart Mart</a>
                        </h3>   
                    </div>
                </div>
            </div>
            
           

            <div class="user_name ">
                <div class="ChucVu" style="font-weight: bold;  margin-right: 20px; margin-top: 5px; font-size: 18px; border: 2px solid rgb(136, 0, 199); border-radius: 10px; padding: 5px 15px; height: 40px;">
                    <?php echo $admin['ChucVu']; ?>
                </div>
                <a href="#">
                    <div class="name" style="font-weight: bold;  margin-right: 10px; font-size: 18px;">
                        <?php echo $admin['HoTen']; ?>
                    </div>
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
        <div class="content_menu" style="display: flex; ">
        <div id="bg-left" style="padding-bottom: 100px; border-bottom-left-radius: 18px;">
                <div class="list_menu">
                        <div class="line_menu">
                            <hr>
                            <div class="text">Thông tin</div>
                            <hr>
                        </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../nhanvien/search_nhanvien.php">
                                <div class="icon">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class="text">
                                    Chỉnh sửa thông tin
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../lichlamviec/your_main_page.php">
                                <div class="icon">
                                    <i class="fas fa-calendar-week"></i>
                                </div>
                                <div class="text">
                                    Lịch làm việc
                                </div>
                            </a>
                        </li>
                        
                </div>
                <div class="list_menu" style="margin-top: 20px;">
                        <div class="line_menu">
                            <hr style="height: 2px; margin-top: 13px;">
                            <div class="text" style="width: 800px;">Quản lý khách hàng</div>
                            <hr style="height: 2px; margin-top: 13px;">
                        </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../khachhang/search_khachhang.php" >
                                <div class="icon">
                                    <i class="fas fa-digital-tachograph"></i>
                                </div>
                                <div class="text">
                                    Dữ liệu khách hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../khachhang/pagefeedback.php">
                                <div class="icon">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="text">
                                    Phản hồi
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="list_menu" style="margin-top: 20px;">
                        <div class="line_menu">
                            <hr>
                            <div class="text" style="width: 700px;">Quản lý hàng hóa</div>
                            <hr>
                        </div>
                    <ul>
                        
                        <li>
                            <a class="item" href="./../hanghoa/product_management.php"  style="border-bottom: 3px solid white; width: 173px;">
                                <div class="icon">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div class="text">
                                    Sản phẩm cửa hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../hanghoa/supplier_management.php" ">
                                <div class="icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                <div class="text">
                                    Nhà cung cấp
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                
            </div>
            <!-- content -->
            <div class="container content" style="font-size: 15px;">

            
                <div class="search-box">
                    <form  action="search_product.php" method="POST" style="display: flex;">
                        <div class="mb-3" style="width: 330px;">
                            <label for="" class="form-label">Nhập tên sản phẩm:</label>
                            <input
                                type="text"
                                class="form-control search-input"
                                style="width: 300px;"
                                name="searchKeyword"
                                id="searchKeyword"
                                aria-describedby="helpId"
                                placeholder="Search..."
                            />  
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            style="background-color: rgb(136, 0, 199); border: none; height: 40px; margin-top: 30px;"
                            name="btnSearchProduct"
                        >
                            Tìm Kiếm
                        </button>
                    </form>
                </div>
                <hr>
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <h2>Quản lý hàng hóa</h2>
            
                        <!-- Form thêm sản phẩm -->
                        <form method="POST">
                            <label for="maNV">Mã nhân viên:</label>
                            <input type="text" name="maNV" required><br> <br>

                            <label for="tenHH">Tên hàng hóa:</label>
                            <input type="text" name="tenHH" required><br><br>

                            <label for="soLuong">Số lượng:</label>
                            <input type="number" name="soLuong" required><br><br>

                            <label for="gia">Giá:</label>
                            <input type="number" name="gia" required><br><br>

                            <label for="imgSP">Link ảnh sản phẩm:</label>
                            <input type="text" name="imgSP" required><br><br>

                            <label for="dvt">Đơn vị tính:</label>
                            <input type="text" name="dvt" required><br><br>

                            <label for="vat">VAT:</label>
                            <input type="number" name="vat" required><br><br>

                            <label for="maNCC">Mã nhà cung cấp:</label>
                            <input type="number" name="maNCC" required><br><br>

                            <button type="submit" name="btnAddProduct">Thêm sản phẩm</button>
                        </form>
                    </div>

                    <!-- Danh sách sản phẩm -->
                    <ul>
                        <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<li>";
                                echo "Mã sản phẩm: {$row['MaHH']} - {$row['TenHH']} - Số lượng: {$row['SoLuong']} - Giá: {$row['Gia']} ";
                                echo " <form method='POST'><input type='hidden' name='maHHToDelete' value='{$row['MaHH']}'><button type='submit' name='btnDeleteProduct'>Xoá</button></form>";
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <hr>

                <form method="POST">
                    <h3>Cập nhật sản phẩm</h3>
                    <label for="maHHToUpdate">Mã sản phẩm cần cập nhật:</label>
                    <input type="number" name="maHHToUpdate" required> <br> <br>
                    
                    <!-- Các trường thông tin sản phẩm cần cập nhật -->
                    <!-- Ví dụ: -->
                    <label for="newTenHH">Tên hàng hóa mới:</label>
                    <input type="text" name="newTenHH" required><br><br>

                    <label for="newSoLuong">Số lượng mới:</label>
                    <input type="number" name="newSoLuong" required><br><br>

                    <label for="newGia">Giá mới:</label>
                    <input type="number" name="newGia" required><br><br>

                    <!-- Thêm các trường khác cần cập nhật -->

                    <button type="submit" name="btnUpdateProduct">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
