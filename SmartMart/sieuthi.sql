CREATE DATABASE sieuthi;
USE sieuthi;
CREATE TABLE KhachHang (
    MaKH INT AUTO_INCREMENT PRIMARY KEY,
    HoTen VARCHAR(255) NOT NULL,
    NgaySinh DATE,
    GioiTinh VARCHAR(10),
    DiaChi VARCHAR(255),
    SoDienThoai VARCHAR(20) NOT NULL,
    Email VARCHAR(100) NOT NULL,
		Password_user VARCHAR(255) NOT NULL
);
CREATE TABLE NhaCungCap (
    MaNhaCungCap INT AUTO_INCREMENT PRIMARY KEY,
    TenNhaCungCap VARCHAR(255) NOT NULL,
    DiaChi VARCHAR(255) NOT NULL,
    SoDienThoai VARCHAR(20) NOT NULL,
    Email VARCHAR(100) NOT NULL
);


CREATE TABLE NhanVien (
    MaNV VARCHAR(20) PRIMARY KEY,
    HoTen VARCHAR(255) NOT NULL,
    NgaySinh DATE,
    GioiTinh VARCHAR(10),
    DiaChi VARCHAR(255),
    SoDienThoai VARCHAR(20) NOT NULL,
    Email VARCHAR(100) NOT NULL,
		Password_admin VARCHAR(255) NOT NULL,
    ChucVu VARCHAR(50),
    Luong DECIMAL(18, 2),
    NgayBatDauLamViec DATE
);

CREATE TABLE QuanLyLichLamViec (
		ID INT AUTO_INCREMENT PRIMARY KEY,
    MaNhanVien VARCHAR(20) NOT NULL,
		FOREIGN KEY (MaNhanVien) REFERENCES NhanVien(MaNV),
    Ngay DATE,
    CaLam VARCHAR(50)
);

CREATE TABLE Report(
	ID INT AUTO_INCREMENT PRIMARY KEY,
	NAME_REPORT VARCHAR(255) NOT NULL
);
CREATE TABLE CommentPage(
	ID INT AUTO_INCREMENT PRIMARY KEY,
	MaKH INT NOT NULL,
	FOREIGN KEY (MaKH) REFERENCES khachhang(MaKH),
	idReport INT NOT NULL,
	FOREIGN KEY (idReport) REFERENCES Report(ID),
	ReComment LONGTEXT
);

CREATE TABLE QuanLyHangHoa (
    MaHH INT AUTO_INCREMENT PRIMARY KEY,
		MaNV VARCHAR(20) NOT NULL,
		FOREIGN KEY (MaNV) REFERENCES NhanVien(MaNV),
    TenHH NVARCHAR(255) NOT NULL,
    SoLuong INT NOT NULL,
    Gia DECIMAL(18, 0) NOT NULL,
		ImgSP VARCHAR(255) NOT NULL,
    DVT VARCHAR(255) NOT NULL,
		VAT INT NOT NULL,
		MaNCC INT NOT NULL,
		FOREIGN KEY (MaNCC) REFERENCES NhaCungCap(MaNhaCungCap)
);

-- Dữ liệu cho bảng KhachHang
INSERT INTO KhachHang (HoTen, NgaySinh, GioiTinh, DiaChi, SoDienThoai, Email, Password_user)
VALUES
    ('Nguyễn Văn A', '1990-01-01', 'Nam', '123 Đường ABC, Quận 1, TP.HCM', '0123456770', 'nguyenvana@gmail.com', 'password123'),
    ('Trần Thị B', '1985-05-10', 'Nữ', '456 Đường XYZ, Quận 2, TP.HCM', '0987654311', 'tranthib@gmail.com', 'securepass'),
    ('Phạm Minh C', '1992-07-20', 'Nam', '789 Đường KLM, Quận 3, TP.HCM', '0123456771', 'phamminhc@gmail.com', '123456'),
    ('Đỗ Thị D', '1988-03-15', 'Nữ', '101 Đường UVW, Quận 4, TP.HCM', '0987654312', 'dothid@gmail.com', 'dodo123'),
    ('Lê Văn E', '1995-08-20', 'Nam', '234 Đường GHI, Quận 5, TP.HCM', '0123456772', 'levane@gmail.com', 'abc123'),
    ('Mai Thị F', '1987-12-05', 'Nữ', '567 Đường LMN, Quận 6, TP.HCM', '0987654313', 'maithif@gmail.com', 'fmaixyz'),
    ('Hoàng Minh G', '1993-04-30', 'Nam', '890 Đường XYZ, Quận 7, TP.HCM', '0123456773', 'hoangming@gmail.com', 'gh123'),
    ('Trần Vân H', '1986-10-25', 'Nữ', '123 Đường DEF, Quận 8, TP.HCM', '0987654314', 'tranvanh@gmail.com', 'vanh456'),
    ('Ngô Đức I', '1991-02-12', 'Nam', '456 Đường UVW, Quận 9, TP.HCM', '0123456774', 'ngoduci@gmail.com', 'iduc123'),
    ('Vũ Thị K', '1989-06-18', 'Nữ', '789 Đường GHI, Quận 10, TP.HCM', '0987654315', 'vuthik@gmail.com', 'k123456');

-- Dữ liệu cho bảng NhaCungCap
INSERT INTO NhaCungCap (TenNhaCungCap, DiaChi, SoDienThoai, Email)
VALUES
    ('Nhà Cung Cấp A', '123 Đường ABC, Quận 1, TP.HCM', '0123456785', 'nhacungcapa@gmail.com'),
    ('Nhà Cung Cấp B', '456 Đường XYZ, Quận 2, TP.HCM', '0987654326', 'nhacungcapb@gmail.com'),
    ('Nhà Cung Cấp C', '789 Đường KLM, Quận 3, TP.HCM', '0123456786', 'nhacungcapc@gmail.com'),
    ('Nhà Cung Cấp D', '101 Đường UVW, Quận 4, TP.HCM', '0987654327', 'nhacungcapd@gmail.com'),
    ('Nhà Cung Cấp E', '234 Đường GHI, Quận 5, TP.HCM', '0123456787', 'nhacungcape@gmail.com'),
    ('Nhà Cung Cấp F', '567 Đường LMN, Quận 6, TP.HCM', '0987654328', 'nhacungcapf@gmail.com'),
    ('Nhà Cung Cấp G', '890 Đường XYZ, Quận 7, TP.HCM', '0123456788', 'nhacungcapg@gmail.com'),
    ('Nhà Cung Cấp H', '123 Đường DEF, Quận 8, TP.HCM', '0987654329', 'nhacungcaph@gmail.com'),
    ('Nhà Cung Cấp I', '456 Đường UVW, Quận 9, TP.HCM', '0123456789', 'nhacungcapi@gmail.com'),
    ('Nhà Cung Cấp K', '789 Đường GHI, Quận 10, TP.HCM', '0987654330', 'nhacungcapk@gmail.com');

-- Dữ liệu cho bảng NhanVien
INSERT INTO NhanVien (MaNV, HoTen, NgaySinh, GioiTinh, DiaChi, SoDienThoai, Email, Password_admin, ChucVu, Luong, NgayBatDauLamViec)
VALUES
    ('NV001', 'Demo Admin', '1988-03-15', 'Nữ', '123 Đường ABC, Quận 1, TP.HCM', '0123456780', 'admin@gmail.com', '123456', 'Quản lý', 15000000, '2022-01-01'),
    ('NV002', 'Lê Văn D', '1995-08-20', 'Nam', '456 Đường XYZ, Quận 2, TP.HCM', '0987654321', 'levand@gmail.com', 'adminsecure', 'Nhân viên bán hàng', 12000000, '2022-02-01'),
    ('NV003', 'Trần Thị E', '1992-07-20', 'Nữ', '789 Đường KLM, Quận 3, TP.HCM', '0123456781', 'tranthie@gmail.com', 'admin123', 'Kế toán', 13000000, '2022-03-01'),
    ('NV004', 'Lê Văn F', '1988-03-15', 'Nam', '101 Đường UVW, Quận 4, TP.HCM', '0987654322', 'levanf@gmail.com', 'adminpass', 'Bảo vệ', 11000000, '2022-04-01'),
    ('NV005', 'Mai Thị G', '1995-08-20', 'Nữ', '234 Đường GHI, Quận 5, TP.HCM', '0123456782', 'maithig@gmail.com', 'adminsecure123', 'Nhân viên kho', 14000000, '2022-05-01'),
    ('NV006', 'Hoàng Minh H', '1987-12-05', 'Nam', '567 Đường LMN, Quận 6, TP.HCM', '0987654323', 'hoangminhh@gmail.com', 'adminpass456', 'Bán hàng online', 12000000, '2022-06-01'),
    ('NV007', 'Trần Vân I', '1993-04-30', 'Nữ', '890 Đường XYZ, Quận 7, TP.HCM', '0123456783', 'tranvani@gmail.com', 'admin123456', 'IT support', 16000000, '2022-07-01'),
    ('NV008', 'Ngô Đức K', '1986-10-25', 'Nam', '123 Đường DEF, Quận 8, TP.HCM', '0987654324', 'ngoduck@gmail.com', 'adminsecure456', 'Marketing', 13000000, '2022-08-01'),
    ('NV009', 'Vũ Thị L', '1991-02-12', 'Nữ', '456 Đường UVW, Quận 9, TP.HCM', '0123456784', 'vuthil@gmail.com', 'admin789', 'Quản lý nhân sự', 17000000, '2022-09-01'),
    ('NV010', 'Đỗ Văn M', '1989-06-18', 'Nam', '789 Đường GHI, Quận 10, TP.HCM', '0987654325', 'dovanm@gmail.com', 'admin101112', 'Dịch vụ khách hàng', 14000000, '2022-10-01');


-- Dữ liệu cho bảng QuanLyLichLamViec
INSERT INTO QuanLyLichLamViec (MaNhanVien, Ngay, CaLam)
VALUES
    ('NV001', '2023-01-05', 'Ca sáng'),
    ('NV002', '2023-02-10', 'Ca chiều'),
    ('NV003', '2023-03-15', 'Ca tối'),
    ('NV004', '2023-04-20', 'Ca sáng'),
    ('NV005', '2023-05-25', 'Ca chiều'),
    ('NV006', '2023-06-30', 'Ca tối'),
    ('NV007', '2023-07-05', 'Ca sáng'),
    ('NV008', '2023-08-10', 'Ca chiều'),
    ('NV009', '2023-09-15', 'Ca tối'),
    ('NV010', '2023-10-20', 'Ca sáng');

-- Dữ liệu cho bảng Report
INSERT INTO Report (NAME_REPORT)
VALUES
    ('Tư vấn mua hàng'),
    ('Thái độ phục vụ'),
    ('Chất lượng sản phẩm'),
    ('Vấn đề khác');

-- Dữ liệu cho bảng CommentPage
INSERT INTO CommentPage (MaKH, idReport, ReComment)
VALUES
    (1, 1, 'Rất hài lòng với sự tư vấn của nhân viên'),
    (2, 2, 'Nhân viên phục vụ rất nhiệt tình và chu đáo'),
    (3, 3, 'Sản phẩm chất lượng, giá cả hợp lý'),
    (4, 4, 'Gặp một số vấn đề nhỏ nhưng đã được giải quyết nhanh chóng'),
    (5, 1, 'Cần cải thiện thêm về dịch vụ tư vấn mua hàng'),
    (6, 2, 'Mong muốn thêm các chương trình khuyến mãi'),
    (7, 3, 'Sản phẩm đẹp, đáng giá tiền'),
    (8, 4, 'Gặp một số vấn đề về giao hàng'),
    (9, 1, 'Nhân viên phục vụ không thân thiện'),
    (10, 2, 'Chưa hài lòng với chất lượng sản phẩm');
    
-- Dữ liệu cho bảng QuanLyHangHoa
INSERT INTO QuanLyHangHoa (MaNV, TenHH, SoLuong, Gia, ImgSP, DVT, VAT, MaNCC)
VALUES
    ('NV001', 'MeatDeli Sụn heo cắt lát', 100, 76064, './../Image/thit/thit_1.png', '0.385 kg', 10, 1),
    ('NV002', 'MeatDeli Thịt nạc vai heo', 50, 48189, './../Image/thit/thit_2.png', '0.44 kg', 8, 2),
    ('NV003', 'MeatDeli Thịt xay tươi ướp sẵn', 80, 60338, './../Image/thit/thit_3.png', '0.385 kg', 12, 3),
    ('NV004', 'MeatDeli Thịt Nạc dăm đầu', 70, 68.376, './../Image/thit/thit_4.png', '0.3 kg', 11, 4),
		('NV001', 'MeatDeli Sụn heo cắt lát', 100, 76064, './../Image/thit/thit_1.png', '0.385 kg', 10, 1),
    ('NV002', 'MeatDeli Thịt nạc vai heo', 50, 48189, './../Image/thit/thit_2.png', '0.44 kg', 8, 2),
    ('NV003', 'MeatDeli Thịt xay tươi ướp sẵn', 80, 60338, './../Image/thit/thit_3.png', '0.385 kg', 12, 3),
    ('NV004', 'MeatDeli Thịt Nạc dăm đầu', 70, 68.376, './../Image/thit/thit_4.png', '0.3 kg', 11, 4),
		('NV001', 'MeatDeli Sụn heo cắt lát', 100, 76064, './../Image/thit/thit_1.png', '0.385 kg', 10, 1),
    ('NV002', 'MeatDeli Thịt nạc vai heo', 50, 48189, './../Image/thit/thit_2.png', '0.44 kg', 8, 2),
    ('NV003', 'MeatDeli Thịt xay tươi ướp sẵn', 80, 60338, './../Image/thit/thit_3.png', '0.385 kg', 12, 3),
    ('NV004', 'MeatDeli Thịt Nạc dăm đầu', 70, 68.376, './../Image/thit/thit_4.png', '0.3 kg', 11, 4),
		('NV001', 'MeatDeli Sụn heo cắt lát', 100, 76064, './../Image/thit/thit_1.png', '0.385 kg', 10, 1),
    ('NV002', 'MeatDeli Thịt nạc vai heo', 50, 48189, './../Image/thit/thit_2.png', '0.44 kg', 8, 2),
    ('NV003', 'MeatDeli Thịt xay tươi ướp sẵn', 80, 60338, './../Image/thit/thit_3.png', '0.385 kg', 12, 3),
    ('NV004', 'MeatDeli Thịt Nạc dăm đầu', 70, 68.376, './../Image/thit/thit_4.png', '0.3 kg', 11, 4),
		('NV001', 'MeatDeli Sụn heo cắt lát', 100, 76064, './../Image/thit/thit_1.png', '0.385 kg', 10, 1),
    ('NV002', 'MeatDeli Thịt nạc vai heo', 50, 48189, './../Image/thit/thit_2.png', '0.44 kg', 8, 2),
    ('NV003', 'MeatDeli Thịt xay tươi ướp sẵn', 80, 60338, './../Image/thit/thit_3.png', '0.385 kg', 12, 3),
    ('NV004', 'MeatDeli Thịt Nạc dăm đầu', 70, 68.376, './../Image/thit/thit_4.png', '0.3 kg', 11, 4);
		
