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
        // Xử lý thêm nhà cung cấp
        if (isset($_POST['btnAddSupplier'])) {
            $tenNCC = $_POST['tenNCC'];
            $diaChi = $_POST['diaChi'];
            $soDienThoai = $_POST['soDienThoai'];
            $email = $_POST['email'];

            $sqlAddSupplier = "INSERT INTO NhaCungCap (TenNhaCungCap, DiaChi, SoDienThoai, Email) 
                               VALUES ('$tenNCC', '$diaChi', '$soDienThoai', '$email')";

            if ($conn->query($sqlAddSupplier) === TRUE) {
                echo "Thêm nhà cung cấp thành công";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }

        // Xử lý xoá nhà cung cấp
        if (isset($_POST['btnDeleteSupplierConfirmed'])) {
            $maNCCToDelete = $_POST['maNCCToDelete'];
        
            // Delete related rows in the 'quanlyhanghoa' table first
            $sqlDeleteRelatedRows = "DELETE FROM quanlyhanghoa WHERE MaNCC = $maNCCToDelete";
            if ($conn->query($sqlDeleteRelatedRows) === TRUE) {
                // Now, delete the supplier
                $sqlDeleteSupplier = "DELETE FROM NhaCungCap WHERE MaNhaCungCap = $maNCCToDelete";
            
                if ($conn->query($sqlDeleteSupplier) === TRUE) {
                    echo "Xoá nhà cung cấp thành công";
                } else {
                    echo "Lỗi khi xoá nhà cung cấp: " . $conn->error;
                }
            } else {
                echo "Lỗi khi xoá hàng hóa liên quan: " . $conn->error;
            }
        } elseif (isset($_POST['btnDeleteSupplier'])) {
            $maNCCToDelete = $_POST['maNCCToDelete'];
        
            // Check for dependent rows in the 'quanlyhanghoa' table
            $checkDependentRows = "SELECT COUNT(*) as rowCount FROM quanlyhanghoa WHERE MaNCC = $maNCCToDelete";
            $resultDependentRows = $conn->query($checkDependentRows);
        
            if ($resultDependentRows) {
                $row = $resultDependentRows->fetch_assoc();
                $rowCount = $row['rowCount'];
        
                if ($rowCount > 0) {
                    // Prompt user for confirmation
                    echo "Nhà cung cấp này có {$rowCount} hàng hóa liên quan. Bạn có chắc chắn muốn xoá?";
                    echo "<form method='POST'><input type='hidden' name='maNCCToDelete' value='{$maNCCToDelete}'>";
                    echo "<button type='submit' name='btnDeleteSupplierConfirmed'>Xoá</button></form>";
                    exit();
                }
            }
        
            // If no dependent rows, proceed with deletion
            $sqlDeleteSupplier = "DELETE FROM NhaCungCap WHERE MaNhaCungCap = $maNCCToDelete";
        
            if ($conn->query($sqlDeleteSupplier) === TRUE) {
                echo "Xoá nhà cung cấp thành công";
            } else {
                echo "Lỗi khi xoá nhà cung cấp: " . $conn->error;
            }
        }

        // Xử lý cập nhật nhà cung cấp
        if (isset($_POST['btnUpdateSupplier'])) {
            $maNCCToUpdate = $_POST['maNCCToUpdate'];
            $newTenNCC = $_POST['newTenNCC'];
            $newDiaChi = $_POST['newDiaChi'];
            $newSoDienThoai = $_POST['newSoDienThoai'];
            $newEmail = $_POST['newEmail'];

            $sqlUpdateSupplier = "UPDATE NhaCungCap 
                                 SET TenNhaCungCap = '$newTenNCC', DiaChi = '$newDiaChi', SoDienThoai = '$newSoDienThoai', Email = '$newEmail' 
                                 WHERE MaNhaCungCap = $maNCCToUpdate";

            if ($conn->query($sqlUpdateSupplier) === TRUE) {
                echo "Cập nhật nhà cung cấp thành công";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }
    }

    // Lấy danh sách nhà cung cấp
    $sqlGetSuppliers = "SELECT * FROM NhaCungCap";
    $result = $conn->query($sqlGetSuppliers);

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
                            <a class="item" href="./../hanghoa/product_management.php">
                                <div class="icon">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div class="text">
                                    Sản phẩm cửa hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="item" href="./../hanghoa/supplier_management.php" style="border-bottom: 3px solid white; width: 173px;">
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
                    <form  action="search_supplier.php" method="POST" style="display: flex;">
                        <div class="mb-3" style="width: 330px;">
                            <label for="" class="form-label">Nhập tên nhà cung cấp:</label>
                            <input
                                type="text"
                                class="form-control search-button"
                                style="width: 300px;"
                                name="searchTerm"
                                id="searchTerm"
                                aria-describedby="helpId"
                                placeholder="Search..."
                                
                            />  
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary search-button"
                            style="background-color: rgb(136, 0, 199); border: none; height: 40px; margin-top: 30px;"
                        >
                            Tìm Kiếm
                        </button>
                    </form>
                </div>
                <hr>
                <div style="display: flex; justify-content: space-between;">
                    <div style="width: 40%;">
                        <h2>Quản lý nhà cung cấp</h2>
                        
                        <!-- Form thêm nhà cung cấp -->
                        <form method="POST">
                            <label for="tenNCC">Tên nhà cung cấp:</label>
                            <input type="text" name="tenNCC" required><br> <br>

                            <label for="diaChi">Địa chỉ:</label>
                            <input type="text" name="diaChi" required><br> <br>

                            <label for="soDienThoai">Số điện thoại:</label>
                            <input type="text" name="soDienThoai" required><br> <br>

                            <label for="email">Email:</label>
                            <input type="text" name="email" required><br> <br>

                            <button type="submit" name="btnAddSupplier">Thêm nhà cung cấp</button>
                        </form>
                    </div>

                    <ul style="width: 55%;">
                        <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<li>";
                                echo "Mã nhà cung cấp: {$row['MaNhaCungCap']} - Nhà cung cấp: {$row['TenNhaCungCap']} - Địa chỉ: {$row['DiaChi']} - Số điện thoại: {$row['SoDienThoai']} - Email: {$row['Email']} ";
                                echo " <form method='POST'><input type='hidden' name='maNCCToDelete' value='{$row['MaNhaCungCap']}'><button type='submit' name='btnDeleteSupplier'>Xoá</button></form>";
                                echo "</li> <br>";
                            }
                        ?>
                    </ul>
                </div>
                <hr>

                <form method="POST">
                    <h3>Cập nhật nhà cung cấp</h3>
                    <label for="maNCCToUpdate">Mã nhà cung cấp :</label>
                    <input type="number" name="maNCCToUpdate" required> <br> <br>
                    
                    <!-- Các trường thông tin nhà cung cấp cần cập nhật -->
                    <!-- Ví dụ: -->
                    <label for="newTenNCC">Tên nhà cung cấp mới:</label>
                    <input type="text" name="newTenNCC" required><br> <br>

                    <label for="newDiaChi">Địa chỉ mới:</label>
                    <input type="text" name="newDiaChi" required><br> <br>

                    <label for="newSoDienThoai">Số điện thoại mới:</label>
                    <input type="text" name="newSoDienThoai" required><br> <br>

                    <label for="newEmail">Email mới:</label>
                    <input type="text" name="newEmail" required><br> <br>

                    <button type="submit" name="btnUpdateSupplier">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>