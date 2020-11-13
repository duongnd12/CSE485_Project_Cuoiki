<?php
include('./head.php');
?>
<header>

    <div class="top_header">

        <nav class="navbar navbar-expand-sm  ">

            <a class="nav-link" href="#">Đại học Thủy Lợi - TLU</a>
            <!--http://www.tlu.edu.vn/-->


            <div class="collapse navbar-collapse " id="collapsibleNavId">

                <ul class="navbar-nav lg-0">
                    <li class="li_text">(+) |

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin/index.php">Quản Lý </a>
                    </li>
                    <li class="li_text">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng xuất</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="admin.php">Quản trị</a>
                        </li> -->
                    <li class="li_text">|</li>
                    <li class="language">
                        <span class="language-text"> Ngôn ngữ: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <a href="#" title="Tiếng Việt" class=" lang-vi"><img src="images/en.png" alt="Tiếng Việt"></a>
                        <a href="#" title="Tiếng Anh" class=" lang-en"><img src="images/vn.png" alt="Tiếng Anh"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search" type="text" placeholder="Tìm kiếm...">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white;">
                        <i class="fa fa-search" style="color: white;"></i></button>
                </form>
            </div>
        </nav>
    </div>
</header>
<?php
include('./head_main.php');
include('./main.php');
include('./footer.php');
?>



