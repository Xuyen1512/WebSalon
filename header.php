<style>
    #khung {
        width: 1200px;
        margin: auto;
        border: 2px solid rgb(222, 221, 215);}

    #header {
        background-color: white;
        height: 50px;
        width: 1200px;
        padding: 10px;
        position: fixed;
        z-index: 1000;
        top: 0;
    }

    .logo {
        float: left;
        width: 20%;
        min-height: 50px;
        text-align: center;
    }

    .menu {
        float: left;
        width: 60%;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: #895900;
    }
    a:visited {color: #895900;}
    a:hover {color: #f30707;}

    .menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .menu li {
        display: inline-block;
        margin: 10px 15px;
        font-weight: bold;
        font-family: Segoe UI, sans-serif;
        font-size: 22px;
        color: #895900;
        cursor: pointer;
    }

    .icon {
        float: right;
        width: 20%;
        text-align: center;
        padding-top: 10px;
    }

    .icon span {
        font-size: 22px;
        margin-left: 15px;
        cursor: pointer;
    }
        
    #menuNho {
        position: absolute;
        top: 60px;
        right: 30px;
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        z-index: 1001;
        text-align: left;
    }
        
    #menuNho a {
        display: block;
        padding: 5px;
        color: #895900;
        font-weight: bold;
        text-decoration: none;
    }
        
    #menuNho a:hover {
        background-color: #fff0d0;
        border-radius: 5px;
    }
       
</style>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#menuIcon").click(function(){
                $("#menuNho").toggle(); });
                $(document).click(function(event) {
                    if (!$(event.target).closest("#menuIcon, #menuNho").length) {
                        $("#menuNho").hide();}
                    });
                });
    </script>

<div id="header">
    <div class="logo"><img src="Hinh/Logo.png" height="50px"> </div>
    <div class="menu">
        <ul>
            <li><a href="index.php"> Trang chủ </a></li>
            <li><a href="gioithieu.php"> Giới thiệu </a></li>
            <li><a href="dicvu.php"> Dịch vụ </a></li>
            <li><a href="tintuc.php"> Tin tức </a></li>
            <li><a href="datlich.php"> Đặt lịch </a></li>
            <li><a href="tuvan.php"> Tư vấn </a></li>
        </ul>
    </div>
    
    <div class="icon">
        <span>🔍</span>
        <span><a href="dangnhap.php">👤</a></span>
        <span id="menuIcon">☰</span>
        <div id="menuNho" style="display: none;">
            <a href="trangchu.php">Trang chủ</a>
            <a href="gioithieu.php">Giới thiệu</a>
            <a href="dichvu.php">Dịch Vụ</a>
            <a href="danhgia.php"> Đánh giá</a>
            <a href="tintuc.php"> Tin tức</a>
            <a href="datlich.php"> Đặt lịch</a>
            <a href="tuvan.php"> Tư vấn</a>
            <a href="csbh.php"> Chính sách bảo hành</a>
        </div>
    </div>
</div>