<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $branch = intval($_POST['branch']);
    $service_type = mysqli_real_escape_string($conn, $_POST['service_type']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $rating = intval($_POST['rating']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $sql_user = "SELECT user_id FROM users WHERE email = '$email'";
    $result_user = mysqli_query($conn, $sql_user);

    if (mysqli_num_rows($result_user) > 0) {
        $row = mysqli_fetch_assoc($result_user);
        $user_id = $row['user_id'];
    } else {
        $sql_insert_user = "INSERT INTO users (name, email, phone, created_at)
                            VALUES ('$fullname', '$email', '$phone', NOW())";
        mysqli_query($conn, $sql_insert_user);
        $user_id = mysqli_insert_id($conn);
    }

    $sql_service = "SELECT service_id FROM service WHERE name = '$service'";
    $result_service = mysqli_query($conn, $sql_service);

    if (mysqli_num_rows($result_service) > 0) {
        $row_service = mysqli_fetch_assoc($result_service);
        $service_id = $row_service['service_id'];
    } else {
        $sql_insert_service = "INSERT INTO service (name, description, price, image)
                               VALUES ('$service', '$service_type', 0, '')";
        mysqli_query($conn, $sql_insert_service);
        $service_id = mysqli_insert_id($conn);
    }

    $sql_feedback = "INSERT INTO feedback (user_id, content, rating, branch_id, service_id, created_at)
                     VALUES ('$user_id', '$feedback', '$rating', '$branch', '$service_id', NOW())";

    if (mysqli_query($conn, $sql_feedback)) {
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
        <p>Cảm ơn quý khách đã ghé thăm Salon Làn Mây
Rất mong quý khách dành chút thời gian đánh giá để chúng tôi hoàn thiện hơn mỗi ngày.
Thank you for using our service. Please leave your feedback to help us improve.</p>

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
                <option value="1">CN1 - 123 Lý Tự Trọng, Q.1, TP.HCM</option>
                <option value="2">CN2 - 456 Phan Xích Long, Q.Phú Nhuận, TP.HCM</option>
                <option value="3">CN3 - 789 Trần Não, TP. Thủ Đức</option>
                <option value="4">CN4 - 101 Nguyễn Văn Cừ, Phường An Hòa, Quận Ninh Kiều, Cần Thơ</option>
                <option value="5">CN5 - 202 Hai Bà Trưng, Phường 6, Quận 3, TP. Hồ Chí Minh</option>

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
