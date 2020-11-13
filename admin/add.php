<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - DHTL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/register.css">

    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script> -->
    <style>
    .cancel button:hover {
        background-color: red;
    }

    img.avatar {
        margin-left: 25%;
        width: 500px;
        height: 80px;
    }

    h3 {
        font-weight: bold;
        font-family: Roboto, Arial, Helvetica, sans-serif;
        color: blue;

    }
    </style>
</head>

<body>
    <div class="container">
       

        <div class="row">
            <div class="col-xs-3 col-sm-3 ">
            </div>

            <div class="col-xs-6 col-sm-6 ">
            <h3>Thêm Tài khoản</h3>
                <form action="config_add.php" method="post" class="form">

                    <label><b> First Name: *</b></label>
                    <input type="text" placeholder="Enter First Name" class="form-control" name="txtfirstname"
                        id="fname">

                    <label><b> Last Name: *</b></label>
                    <input type="text" placeholder="Enter Last Name" class="form-control" name="txtlastname" id="lname">

                    <label><b>Tên người dùng: *</b></label>
                    <input type="text" placeholder="Enter Username, Email" class="form-control" name="txtusername"
                        id="username">

                    <label><b>E-mail: *</b></label>
                    <input type="text" placeholder="Enter Email" class="form-control" name="txtemail" id="email">


                    <label><b>Mật khẩu: *</b></label>
                    <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword"
                        id="password">


                    <labe1><b>Chức vụ: *</b></label> <br>
                        <input type="radio" id="sv" name="rdCV" value="1" checked>
                        <label for="sv">Sinh Viên</label>
                        <input type="radio" id="gv" name="rdCV" value="2">
                        <label for="gv">Giảng Viên</label>
                        <input type="radio" id="gv" name="rdCV" value="0">
                        <label for="ad">Admin</label>
                        <div class="save">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit"
                                id="save">Save</button>
                        </div>
                </form>

                <br>
                <form action="index.php">
                    <div class="cancel">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Cancel</button>
                    </div>
                </form>
            </div>

            <div class="col-xs-3 col-sm-3 ">
            </div>
        </div>
    </div>
</body>

</html>