<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <style>
        #khung {
            width: 1200px;
            margin: auto;
            border: 2px solid rgb(222, 221, 215);
        }

        #noidung {
            background: linear-gradient(to right, #fff5e6, #ffffff);
            padding: 20px;
            clear: both;
            border-top: 3px solid white;
        }

        #tieude {
            text-align: center;
            font-size: 40px;
            padding-top: 50px;
            font-weight: bold;
            font-family: 'Gill Sans', sans-serif;
            color: #895900;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }

        .news-item {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 5px solid #493a10;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .news-item h3 {
            margin-top: 0;
        }

        .news-item p {
            color: #555;
        }
        
    </style>
</head>

<body>
    <div id="khung">
        <?php include 'header.php'; ?>

        <div id="noidung">
            <div id="tieude"> TIN TỨC </div>
            <div class="container">
                <div class="news-item">
                    <h3>🎉 Khuyến mãi hè: Giảm 30% cho mọi dịch vụ</h3>
                    <p><strong>Ngày:</strong> 08/07/2025</p>
                    <p>Salon Tóc Xinh triển khai chương trình khuyến mãi mùa hè từ 10/7 - 30/7 với ưu đãi giảm giá 30% cho tất cả các dịch vụ cắt, nhuộm, gội đầu, chăm sóc tóc.</p>
                </div>
                <div class="news-item">
                    <h3>🌟 Giới thiệu stylist mới: Nguyễn Thị Hoa</h3>
                    <p><strong>Ngày:</strong> 05/07/2025</p>
                    <p>Chúng tôi rất vui mừng khi stylist Hoa – người từng làm việc tại nhiều salon nổi tiếng – chính thức gia nhập Salon Tóc Xinh từ tháng 7 này.</p>
                </div>
                <div class="news-item">
                    <h3>💡 Mẹo chăm sóc tóc khô xơ tại nhà</h3>
                    <p><strong>Ngày:</strong> 01/07/2025</p>
                    <p>Tóc bạn đang khô rối sau khi nhuộm? Xem ngay 5 mẹo đơn giản giúp phục hồi tóc tại nhà từ chuyên gia của Salon Tóc Xinh.</p>
                </div>
            </div>
        </div>
        
          <?php include 'footer.php'; ?>
    </div>
</body>
</html>
