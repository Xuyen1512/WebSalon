<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Giới thiệu</title>
  <style>
     #khung {
            width: 1200px;
            margin: auto;
            border: 2px solid rgb(222, 221, 215);
        }
        
    #noidung {
            background: linear-gradient(to right, #fff5e6, #ffffff);
            font-family: Segoe UI, sans-serif;
            padding: 20px;
            clear: both;
            border-top: 3px solid white;
        }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      position: relative;  
      font-size: 16px;
      padding-top: 70px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      padding: 40px 20px;
      color: #553d12;
    }

    h1 {
      font-size: 48px;
      font-weight: 800;
      color: #895900;
      text-align: center;
      margin-bottom: 30px;
    }

    h2 {
      font-size: 28px;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 10px;
    }

    p {
      margin-bottom: 20px;
    }

    .gallery {
      width: 100%;
      height: 500px;
      position: relative;
      margin: 50px 0;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .gallery img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
      cursor: pointer;
    }

    .gallery img.active {
      opacity: 1;
      z-index: 1;
    }

    .gallery-note {
      text-align: center;
      font-style: italic;
      margin-top: 10px;
      color: #5c3d0a;
    }
  </style>

  

</head>

<body>
    <div id="khung">
        <?php include 'header.php'; ?>
        
        <div id="noidung">
            <div class="container">
            <h1>Về Salon Làn Mây</h1>

            <h2>GIỚI THIỆU VỀ SALON LÀN MÂY</h2>
            <p><em>"Nâng niu từng sợi tóc, tôn vinh vẻ đẹp riêng"</em></p>
            <p>Giữa nhịp sống đô thị hối hả, Salon Làn Mây ra đời như một khoảng lặng êm đềm – nơi bạn có thể dừng lại, chăm sóc bản thân và tìm lại sự nhẹ nhàng bên trong...</p>

            <h2>SỨ MỆNH CỦA CHÚNG TÔI</h2>
            <p>Chúng tôi tin rằng vẻ đẹp bền vững đến từ sự chăm sóc tử tế, lành mạnh và chân thật. Sứ mệnh của Làn Mây là:</p>
            <ul>
                <li>Chăm sóc tóc một cách tự nhiên, không xâm hại đến da đầu và cấu trúc tóc</li>
                <li>Lắng nghe và tôn trọng vẻ đẹp cá nhân của từng khách hàng</li>
                <li>Tạo ra một không gian làm đẹp để khách hàng được là chính mình</li>
            </ul>
            
            <h2>PHONG CÁCH PHỤC VỤ</h2>
            <ul>
              <li>Tư vấn kiểu tóc phù hợp với gương mặt, tính cách và môi trường sống</li>
                <li>Chăm sóc bằng các sản phẩm hữu cơ, chiết xuất từ thiên nhiên</li>
                <li>Không gian nhẹ nhàng với hương thơm và âm nhạc thư giãn</li>
                <li>Thợ tóc tay nghề cao, cập nhật xu hướng tinh tế</li>
            </ul>
            
            <h2>CAM KẾT DỊCH VỤ CỦA LÀN MÂY</h2>
            <ul>
                <li>Không hóa chất độc hại – chỉ dùng sản phẩm tự nhiên</li>
                <li>Không ép theo khuôn mẫu – thiết kế tóc riêng cho từng khách</li>
                <li>Không gian xanh, sạch, giúp bạn thư giãn</li>
                <li>Không chạy theo số lượng – phục vụ tận tâm từng người</li>
            </ul>

            <h2>BỘ SƯU TẬP ẢNH</h2>
            <div class="gallery">
                <img src="Hinh/1.png" class="slide active" alt="Ảnh 1">
                <img src="Hinh/2.png" class="slide" alt="Ảnh 2">
                <img src="Hinh/3.webp" class="slide" alt="Ảnh 3">
            </div>

            <script>
            const slides = document.querySelectorAll(".gallery .slide");
            let current = 0;
            
            function showNextSlide() {
                slides[current].classList.remove("active");
                current = (current + 1) % slides.length;
                slides[current].classList.add("active");
            }
            setInterval(showNextSlide, 3000); 
            slides.forEach(slide => {
                slide.addEventListener("click", showNextSlide); 
            });
            </script>
            <p class="gallery-note">Ảnh chạy tự động – bấm vào để xem ảnh tiếp theo.</p>
        </div>
       
    </div>  
     <?php include 'footer.php'; ?>
</body>
</html>