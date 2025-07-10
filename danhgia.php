<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $service_type = mysqli_real_escape_string($conn, $_POST['service_type']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $rating = intval($_POST['rating']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $sql = "INSERT INTO feedback (user_id, content, rating, created_at)
            VALUES (NULL, '$feedback', '$rating', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Cảm ơn bạn đã gửi đánh giá!');</script>";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đánh giá dịch vụ - Salon Làn Mây</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            background: #fff5e6;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        .container h1 {
            color: #895900;
            text-align: center;
            margin-bottom: 10px;
        }
        .container p {
            text-align: center;
            margin-bottom: 30px;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        form button {
            background-color: #895900;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        form button:hover {
            background-color: #553d12;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>ĐÁNH GIÁ DỊCH VỤ</h1>
        <p>Xin quý khách vui lòng điền thông tin để chúng tôi phục vụ tốt hơn.</p>

        <form method="post" action="">
            <label>Họ và tên / Full name</label>
            <input type="text" name="fullname" required>

            <label>Số điện thoại / Phone</label>
            <input type="text" name="phone" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Cơ sở sử dụng dịch vụ / Branch used</label>
            <select name="branch" required>
                <option value="">-- Chọn cơ sở --</option>
                <option value="1">Cơ sở 1 - Quận 10</option>
                <option value="2">Cơ sở 2 - Quận 5</option>
                <!-- có thể bổ sung thêm -->
            </select>

            <label>Loại dịch vụ / Specific service</label>
            <input type="text" name="service_type" required>

            <label>Dịch vụ cần đánh giá / Service</label>
            <input type="text" name="service" required>

            <label>Đánh giá mức độ hài lòng / Rating</label>
            <select name="rating" required>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>

            <label>Ý kiến của bạn / Feedback</label>
            <textarea name="feedback" rows="5" required></textarea>

            <button type="submit" name="submit">Gửi đánh giá</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
