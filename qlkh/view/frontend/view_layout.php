<!-- giao diện chính  -->

<!DOCTYPE html >
<html>
<head>
    <title>Bò Sữa By Boo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/main.css">
</head>
<body>
   <!-- Header -->
    <div id="header">
        <div class="top">
            <!-- Logo -->
            <div id="logo">
                <span class="image avatar48"><img src="public/frontend/images/bosua_logo.jpg"/></span>
                <h1 id="title">Nguyễn Đình Vinh</h1>
                <p>PHP Developer</p>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Trang chủ</span></a></li>
                    <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-globe">Giới thiệu</span></a></li>
                    <li><a href="#admin" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Đội ngũ Admin</span></a></li>
                    <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Các cơ sở</span></a></li>
                    <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Liên hệ</span></a></li>
                    <li><a href="admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-hand-o-right">Trang admin</span></a></li>
                </ul>
            </nav>
        </div>

        <div class="bottom">
            <!-- Social Icons -->
            <ul class="icons">
                <li><a target="_blank" href="https://www.facebook.com/vinhxxu" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>
        </div>
    </div>

    <!-- Main -->
    <div id="main">
        <!-- Intro -->
        <section id="top" class="one dark cover" style="background: url(public/frontend/images/banner.jpg);">
            <div class="container">
                <header>
                    <p style="font-size: 300%; font-weight: bold;">Bò Sữa By Boo</p><br>
                    <h2>Chuyên quần áo thời trang cho giới trẻ</h2>

                    <p>Trang web này được xây dựng bởi <a href="https://www.facebook.com/vinhxxu">Nguyễn Đình Vinh</a></p>
                </header>
                <style type="text/css">
                    #main a:hover{text-decoration: none;}
                </style>
                <footer>
                    <a href="#about" class="button scrolly">Xem thêm về chúng tôi</a>
                </footer>
            </div>
        </section>

        <!-- About Me -->
        <section id="about" class="three">
            <div class="container">
                <header>
                    <h2 style="font-weight: bold;">GIỚI THIỆU</h2>
                </header>

                <a href="#" class="image featured"><img src="public/frontend/images/bosua_bg.jpg"/></a>

                <p style="color: black;">Ra đời từ tháng 7/2009, Bò Sữa là một thương hiệu thời trang Việt Nam được thiết kế và sản xuất bởi công ty BOO. Cho đến ngày nay, Bò Sữa đã trở thành một nhãn hiệu thể hiện tinh thần thuần Việt.
                  Bên cạnh đó, sự nghịch ngợm phá cách đã trở thành phong cách chủ đạo mà Bò Sữa lựa chọn cho mình.
                  Với thế mạnh là các sản phẩm áo phông in hình, Bò Sữa đi đầu trong việc chuyển tải những đặc trưng văn hóa truyền thống hay nhịp sống đô thị tại Việt Nam lên các sản phảm như: Trà chanh, cafe sữa đá, xe buýt, mỳ tôm...
                  Những câu " cửa miệng " quen thuộc của người Việt trẻ hiện đại cũng là nguồn cảm hứng dồi dào của các thiết kế.
                  Những chiếc áo thun Bò Sữa không chỉ là sản phẩm thời trang mà còn là sản phẩm thể hiện tinh thần của thanh niên VIệt Nam.
                </p>
            </div>
        </section>

        <!-- Admin -->
        <?php include "controller/frontend/controller_admin.php" ?>

        <!-- Portfolio -->
        <?php include "controller/frontend/controller_department.php" ?>

        <!-- Contact -->
        <?php include "controller/frontend/controller_contact.php" ?>

    <!-- Footer -->
    <div id="footer">
        <!-- Copyright -->
        <ul class="copyright">
            <!-- <li>&copy; Template được download tại trang <a href="http://html5up.net">HTML5 Up</a></li> -->
            <li>Về chúng tôi: Thương hiệu thời trang dành cho giới trẻ nổi bật với những sản phẩm thể hiện văn hoá đường phố Việt Nam</li>
            <li>Design: Nguyễn Đình Vinh</li>
        </ul>
    </div>
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <script src="public/frontend/js/jquery-3.2.0.js"></script>
    <script src="public/frontend/js/jquery.scrolly.min.js"></script>
    <script src="public/frontend/js/jquery.scrollzer.min.js"></script>
    <script src="public/frontend/js/skel.min.js"></script>
    <script src="public/frontend/js/util.js"></script>
    <script src="public/frontend/js/main.js"></script>
</body>
</html>
