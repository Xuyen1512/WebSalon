<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Chào mừng bạn đến Salon Làn Mây</h2>";

if ($_SESSION['role'] == 'admin') {
    echo "<p>Bạn là <b>Quản trị viên</b>. Có quyền quản lý toàn bộ hệ thống.</p>";
    echo "<a href='manage_feedback.php'>Quản lý đánh giá</a>";
} elseif ($_SESSION['role'] == 'employee') {
    echo "<p>Bạn là <b>Nhân viên</b>. Có thể xem đánh giá và quản lý dịch vụ.</p>";
    echo "<a href='manage_feedback.php'>Xem đánh giá</a>";
} else {
    echo "<p>Bạn là <b>Khách hàng</b>. Cảm ơn bạn đã sử dụng dịch vụ.</p>";
    echo "<a href='feedback.php'>Gửi đánh giá dịch vụ</a>";
}

echo "<p><a href='logout.php'>Đăng xuất</a></p>";
?>
