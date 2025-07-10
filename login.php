<?php
session_start();
include("connect.php");

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND role = '$role'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Sai mật khẩu.";
        }
    } else {
        $error = "Tài khoản không tồn tại hoặc sai vai trò.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập - Salon Làn Mây</title>
    <style>
        body { font-family: Arial, sans-serif; background: #d3d3d3; }
        .container { width: 400px; margin: 50px auto; background: #fff5e6; padding: 20px; border-radius: 10px; }
        h2 { color: #895900; text-align: center; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select {
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
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post">
            <label>Vui lòng chọn vai trò</label>
            <select name="role" required>
                <option value="">-- Chọn vai trò --</option>
                <option value="customer">Khách hàng</option>
                <option value="employee">Nhân viên</option>
                <option value="admin">Quản trị viên</option>
            </select>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Mật khẩu</label>
            <input type="password" name="password" required>

            <label><input type="checkbox"> Ghi nhớ</label>

            <button type="submit" name="login">Đăng nhập</button>
        </form>
        <p style="text-align: center;">Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    </div>
</body>
</html>
