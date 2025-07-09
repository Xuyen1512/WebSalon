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

        #banner img{
            height: 500px;
            width: 1200px;
        }

        #Ten {
            text-align: center;
            margin: 20px 0;
            font-size: 80px;
            color: #895900;
            font-family: 'Times New Roman', serif;
        }

        #slogan {
            text-align: center;
            margin-top:0;
            font-size: 25px;
            color: #895900;
            font-family: 'Times New Roman', serif;
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

        .khoi {
            background-color: #ffe0b2;
            max-width: 900px;
            margin: auto;
            margin-bottom: 20px;
            border-radius: 10px;
            padding: 10px;
        }
        
        .hang-ngang {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        
        .dich-vu-item {
            flex: 1;
            min-width: 120px;
            background-color: #fff3e0;
            border-radius: 10px;
            padding: 10px;
        }
        
        .dich-vu-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        .dich-vu-item a {
            display: block;
            margin-top: 8px;
            color: #8B0000;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
        }
        
        #anh_gt img {
            flex: 1;
            width: 100%;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            object-fit: cover;
        }

        #text{
            flex: 2;
            font-size: 20px;
            font-family: Segoe UI, sans-serif;
            color: #895900;
            margin: 20px;
        }

        .khung-iframe {
            width: 101%;
            height: 900px;
            border: none;
            overflow: hidden;
            display: flex;
            justify-content: center;   
            align-items: center;  
        }
        
    </style>

    <script src="jquery-3.7.1.min.js"></script>

</head>

<body>
    <div id="khung">
        <?php include 'header.php'; ?>
        
        <div id="banner"><img src="Hinh/Banner.jpg" ></div>

        <p id="Ten"> SaLon Làn Mây </p>
        <p id="slogan"> Nâng niu từng sợi tóc, tôn vinh vẻ đẹp riêng </p>

        <div id="noidung">
            <p id="tieude"> DỊCH VỤ </p>
            <div class="khoi">
                <div class="hang-ngang">
                    <div class="dich-vu-item">
                        <img src="Hinh/cattoc.jpg" alt="Cắt tóc">
                        <a href="#">Cắt tóc</a>
                    </div>
                    <div class="dich-vu-item">
                        <img src="Hinh/nhuom.jpg" alt="Nhuộm tóc">
                        <a href="#">Nhuộm tóc</a>
                    </div>
                    <div class="dich-vu-item">
                        <img src="Hinh/goidau.jpg" alt="Gội dầu">
                        <a href="#">Gội đầu thư giãn</a>
                    </div>
                    <div class="dich-vu-item">
                        <img src="Hinh/chamtoc.png" alt="Chăm sóc tóc">
                        <a href="#">Chăm sóc tóc</a>
                    </div>
                </div>
            </div>

            <p id="tieude"> VỀ CHÚNG TÔI </p>
            <div class="khoi">
                <div id="anh_gt"><img src="Hinh/anh_gt.jpg"> </div>
                <div id="text">Tại Salon Làn Mây, chúng tôi hiểu rằng mỗi mái tóc là một cá tính,
                mỗi người phụ nữ là một câu chuyện. Với sứ mệnh nâng niu từng sợi tóc, đội ngũ chuyên gia 
                của chúng tôi không chỉ mang đến những kiểu tóc thời thượng, mà còn giúp khách hàng cảm nhận được 
                vẻ đẹp tự nhiên và sự tự tin toả sáng từ bên trong.Không gian nhẹ nhàng, dịch vụ tận tâm 
                và sự chỉn chu trong từng thao tác - đó là những gì Làn Mây luôn duy trì để mang đến một trải nghiệm làm đẹp thư giãn và đáng nhớ. Xem thêm..</div>
            </div>

            <p id="tieude"> TIN TỨC MỚI NHẤT </p>
            <div class="khoi">
                <div id="text">Xu Hướng Tóc 2025:
                </span> Màu Kem Khói & Layer Bồng Bềnh Gây Sốt!<br>
                <strong>Nội dung ngắn:</strong><br>
                Cập nhật ngay những kiểu tóc hot nhất mùa năm 2025 – từ nhuộm kem khói đến kiểu layer nhẹ nhàng giúp khuôn mặt thon gọn. 
                Các chuyên gia tạo mẫu của Salon [Tên bạn] đã sẵn sàng tư vấn và miễn phí!<br>
                <a href="tintuc.html">[Xem chi tiết tại đây]</a></div>
            </div>

            <p id="tieude"> ĐÁNH GIÁ </p>
            <div class="khoi">
                <div id="text">
                    <strong>Tiêu đề:</strong><br>
                    <strong>Khách Hàng Nói Gì Về Chúng Tôi?</strong><br>
                    <strong>Nội dung trích dẫn:</strong><br>
                    “Tóc mình sau khi phục hồi ở đây đã mềm mượt hẳn, màu nhuộm lên đúng ý và bền màu. Nhân viên siêu kỹ, dễ thương và tư vấn rất kỹ!”<br>
                    – <em>Linh Trầm, khách hàng thân thiết</em><br>
                    <a href="danhgia.html">[Xem thêm đánh giá]</a>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
</body>
</html>
