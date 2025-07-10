<?php
include("connect.php");

if (isset($_POST['register'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $error = "Mật khẩu không khớp.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, phone, password, role, created_at)
                VALUES ('$fullname', '$email', '$phone', '$hashed_password', 'customer', NOW())";

        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Lỗi đăng ký: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký - Salon Làn Mây</title>
    <style>
        body { font-family: Arial, sans-serif; background: #d3d3d3; }
        .container { width: 400px; margin: 50px auto; background: #fff5e6; padding: 20px; border-radius: 10px; }
        h2 { color: #895900; text-align: center; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type=text], input[type=password], input[type=email] {
            width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;
        }
        button {
            width: 100%; background: #895900; color: white; padding: 10px; border: none; border-radius: 5px;
            margin-top: 15px; cursor: pointer;
        }
        button:hover { background: #553d12; }
        .error { color: red; text-align: center; }
        a { color: #895900; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Salon Làn Mây</h2>
        <p style="text-align: center;">Tạo tài khoản để nhận ưu đãi và đặt lịch nhanh chóng tại Làn Mây.</p>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post">
            <label>Họ và tên</label>
            <input type="text" name="fullname" required>

            <label>Số điện thoại</label>
            <input type="text" name="phone" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Mật khẩu</label>
            <input type="password" name="password" required>

            <label>Xác nhận mật khẩu</label>
            <input type="password" name="confirm_password" required>

            <label>
                <input type="checkbox" required> Tôi đồng ý với Điều khoản & Chính sách bảo mật
            </label>

            <button type="submit" name="register">Đăng ký</button>
        </form>
        <p style="text-align: center;">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</body>
</html>
