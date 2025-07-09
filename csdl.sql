CREATE DATABASE IF NOT EXISTS SalonLanMay;
USE SalonLanMay;

CREATE TABLE Policy (
    policy_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT
);

INSERT INTO Policy (title, content) VALUES
('Chính sách bảo hành tóc nhuộm', 
 'Bảo hành màu nhuộm trong 30 ngày. Khách được chỉnh sửa miễn phí nếu phai màu bất thường.'),
('Chính sách bảo hành phục hồi', 
 'Cam kết tóc không hư tổn thêm sau phục hồi. Miễn phí kiểm tra lại nếu tóc không đạt kết quả.');

CREATE TABLE Branch (
    branch_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    address TEXT,
    phone VARCHAR(20),
    zalo VARCHAR(20)
);

INSERT INTO Branch (name, address, phone, zalo) VALUES
('CN1', '123 Lý Tự Trọng, Q.1, TP.HCM', '0909 888 999', '0909 888 999'),
('CN2', '456 Phan Xích Long, Q.Phú Nhuận, TP.HCM', '0909 888 999', '0909 888 999'),
('CN3', '789 Trần Não, TP. Thủ Đức', '0909 888 999', '0909 888 999'),
('CN4', '101 Nguyễn Văn Cừ, Ninh Kiều, Cần Thơ', '0909 888 999', '0909 888 999'),
('CN5', '202 Hai Bà Trưng, Q.3, TP.HCM', '0909 888 999', '0909 888 999');

CREATE TABLE About (
    about_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    image VARCHAR(255)
);

INSERT INTO About (title, content, image) VALUES
('Giới thiệu về Salon Làn Mây',
 'Nâng niu từng sợi tóc, tôn vinh vẻ đẹp riêng. Giữa nhịp sống đô thị hối hả, Salon Làn Mây ra đời như một khoảng lặng êm đềm – nơi bạn có thể dừng lại, chăm sóc bản thân và tìm lại sự nhẹ nhàng bên trong...',
 'Hinh/anh_gt.jpg');
