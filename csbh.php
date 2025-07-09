<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chính sách bảo hành - Salon Làn Mây</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffaf0;
            padding-top: 70px;
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 30px;
            background: #fff;
            color: #5c3d0a;
            line-height: 1.8;
        }

        h1 {
            font-size: 40px;
            color: #895900;
            text-align: center;
            margin-bottom: 30px;
        }

        .policy {
            background-color: #fff0dc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .policy h2 {
            color: #7a4e00;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h1>Chính sách bảo hành</h1>

    <?php
        include("connect.php");
        $sql = "SELECT * FROM Policy";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='policy'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . nl2br($row['content']) . "</p>";
                echo "</div><br>";
            }
        } else {
            echo "<p>Chưa có chính sách bảo hành nào.</p>";
        }

        mysqli_close($conn);
    ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
