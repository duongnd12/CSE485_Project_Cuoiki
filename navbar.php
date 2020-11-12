<?php
// session_destroy();
session_start();
?>

<body>
    <div class="row top-nav__background">
        <div class="container">
            <ul class="top-nav">
                <li class="top-nav__item top-nav__item--school-name">Trường Đại học Thủy Lợi -TLU </li>
                <li class="top-nav__item">(+) |</li>
                <li class="top-nav__item"><a href="dangnhap.php">
                        <?php
                       
                        // session_destroy ( );
                        if (isset($_SESSION["name"])) {
                           echo ($_SESSION["name"]);
                            // echo ($_SESSION['name']);
                            echo (' |<li class="top-nav__item"><a href="dangxuat.php"><i class="fas fa-sign-out-alt"></i></li>');
                        } else {
                            // echo "Login";
                            echo (' <li class="top-nav__item"><a href="dangnhap.php">Login</a> | </li>');
                            echo (' <li class="top-nav__item"><a href="dangky.php">Register</a> | </li>');
                        }
                        ?>
                    </a> | </li>

                <li class="top-nav__item">Language | </li>
                <li class="top-nav__item top-nav__flags">
                    <img src="./images/icon-lang-vi.png" alt="">
                    <img src="./images/icon-lang-en.png" alt="">
                </li>
                <li class="top-nav__item top-nav__search">
                    <input type="text" placeholder="Tìm Kiếm" />
                    <span class="search-icon"><i class="fas fa-search"></i></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <img src="./images/logo.jpg" alt="" class="header__logo">
    </div>
    <div class="container">
        <ul class="navbar__menu">
            <li class="navbar__menu-item">
                <a href="#" class="navbar__menu-link">
                    Trang Chủ
                </a>
            </li>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Giới Thiệu
                    </a>
                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Logo Khoa CNTT</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Lời chào mừng</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Tổ chức</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Hợp tác liên kết</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nghiên Cứu Khoa Học
                    </a>
                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Các đề tài, dự án</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Thông tin seminar</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Công trình công bố</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Các phòng thí nghiệm</a>
                    </div>
                </div>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Đào tạo
                    </a>
                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Đào tạo đại học</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Đào tạo sau đại học</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Chuẩn đầu ra</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Định hướng ngành nghề</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Mô hình đào tạo</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Đề cương môn học</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bộ môn-Trung tâm
                    </a>
                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">CN phần mềm
                        </a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Hệ thống thông tin</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Khoa học máy tính</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Kỹ thuật máy tính và mạng</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Toán học</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Tin học và Kỹ thuật tính toán/a>
                            <a class="dropdown-item dropdown-item__custom" href="#">Trung tâm tin học</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sinh viên
                    </a>
                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Tài liệu sinh viên</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Tổ tư vấn học tập</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Biểu mẫu ĐATN</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Luận văn tốt nghiệp</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">

                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tin tức
                    </a>

                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Sự kiện
                        </a>
                        <a class="dropdown-item dropdown-item__custom" href="#">CSE trên báo</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">
                <div class="dropdown">
                    <a class="dropdown-toggle navbar__menu-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thông báo
                    </a>

                    <div class="dropdown-menu dropdown-menu__custom" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dropdown-item__custom" href="#">Thông báo</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">TB Đào tạo</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Nghiên cứu khoa học</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Tuyển dụng</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Học bổng</a>
                        <a class="dropdown-item dropdown-item__custom" href="#">Thông báo khác</a>
                    </div>
                </div>
            </li>
            <li class="navbar__menu-item">
                <a href="./forum.php" class="navbar__menu-link">
                    Diễn Đàn
                </a>
            </li>
            <li class="navbar__menu-item">
        </ul>
    </div>
    <hr>