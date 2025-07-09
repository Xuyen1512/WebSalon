<?php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salon Làn Mây</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: 'Montserrat', sans-serif;
  padding-top: 70px; 
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background: linear-gradient(rgba(255,235,205,1), rgba(255,245,230,1));
}

#header {
  background-color: white;
  height: 50px;
  width: 100%;
  padding: 10px;
  position: fixed;
  z-index: 1000;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 1px 1px rgba(0,0,0,0.25);
}
#header div {
  color: rgba(121,70,4,1);
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 20px;
}

#footer {
  background-color: #D2B48C;
  display: flex;
  justify-content: space-between;
  padding: 30px;
  flex-wrap: wrap;
  color: #fff;
  font-size: 16px;
  margin-top: auto;
}

/* Nội dung */
.service-title {
  color: rgba(137,89,0,1);
  font-weight: 700;
  font-size: 36px;
  text-align: center;
  margin: 40px 0;
}
.service-row {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}
.service-box {
  width: 243px;
  height: 253px;
  background: rgba(254,237,206,1);
  border-radius: 30px;
}

.service-link-row {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin: 20px;
  gap: 10px;
}
.service-link {
  width: 176px;
  color: #fff;
  font-weight: 800;
  font-size: 24px;
  text-align: center;
  background-color: rgba(137,89,0,1); /* thêm nền để nhìn rõ */
  border-radius: 10px;
  padding: 5px 0;
}

.section-text {
  max-width: 1000px;
  margin: 20px auto;
  font-size: 18px;
  color: #333;
  text-align: center;
}

.branch, .contact {
  width: 45%;
}
</style>
</head>
<body>

<div id="header">
 <div class="nav">Trang chủ | Giới thiệu | Dịch vụ | Tin tức | Đặt lịch | Tư vấn</div>
</div>

<div class="service-title">DỊCH VỤ CỦA CHÚNG TÔI</div>

<div class="service-row">
  <div class="service-box"></div>
  <div class="service-box"></div>
  <div class="service-box"></div>
  <div class="service-box"></div>
</div>

<div class="service-link-row">
  <div class="service-link">Cắt tóc chuyên nghiệp</div>
  <div class="service-link">Uốn tóc bồng bềnh</div>
  <div class="service-link">Nhuộm tóc thời thượng</div>
  <div class="service-link">Gội đầu thư giãn</div>
</div>

<div class="section-text">
  Tại Làn Mây, chúng tôi mang đến cho bạn những dịch vụ chăm sóc tóc chất lượng cao, được thực hiện bởi đội ngũ thợ lành nghề, tận tâm.
  Dù bạn muốn thay đổi phong cách hay giữ gìn mái tóc khỏe đẹp, chúng tôi luôn sẵn sàng đồng hành cùng bạn.
</div>

<div id="footer">
  <div class="branch">
    <strong>Địa chỉ các chi nhánh:</strong><br>
    • CN1: 123 Lý Tự Trọng, Q.1, TP.HCM<br>
    • CN2: 456 Phan Xích Long, Q.Phú Nhuận, TP.HCM<br>
    • CN3: 789 Trần Não, TP. Thủ Đức<br>
    • CN4: 101 Nguyễn Văn Cừ, P. An Hòa, Q. Ninh Kiều, Cần Thơ<br>
    • CN5: 202 Hai Bà Trưng, P.6, Q.3, TP. Hồ Chí Minh
  </div>
  <div class="contact">
    <strong>Liên hệ:</strong><br>
    Hotline: 0909 888 999<br>
    Email: salonlanmay@gmail.com<br>
    Zalo: 0909 888 999<br>
    Faceb
