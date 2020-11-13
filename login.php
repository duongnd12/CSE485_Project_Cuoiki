<!DOCTYPE html>
<?php
//Khai báo sử dụng session
session_start();
?>
<html lang="en">

<head>
    <title>Login - DHTL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="imgcontainer">
        <img src="images/logo.jpg" alt="Avatar" class="avatar">
    </div>


    <div class="container">

        <!-- <form name="flogin" method="post"
action="thanhcong.php?goto=" onsubmit="return checkinput();"> -->
        <form action="login_submit.php" method="post">
            <div class="col-xs-6 col-sm-6 ">
                <label for="uname"><b>Username: </b></label>
                <input type="text" placeholder="Enter username" class="form-control" name="txtemail" required>

                <br>
                <label for="psw"><b>Password: </b></label>
                <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword" required>

                <br>
                <label for="chkremember">
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>

                <div class="login">
                    <button type="submit" name="btn_login">Đăng nhập</button>
                </div>

            </div>
        </form>
        <br>
        <form action="register.php">
            <div class="login col-xs-6 col-sm-6">
                <button type="submit">Đăng ký</button>
            </div>
        </form>
        <br>
        <div class="col-xs-6 col-sm-6" style="background-color:#f1f1f1; width: auto;">
            <span class="psw">Forgot&nbsp;<a href="#"> password?</a></span>
        </div>
    </div>


</body>

</html>