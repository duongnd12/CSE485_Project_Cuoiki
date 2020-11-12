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
        <div class="imgcontainer">
            <img src="imgs/logo.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-3 ">
            </div>

            <div class="col-xs-6 col-sm-6 ">

                <form action="register_submit.php" method="post" class="form">

                    <label for="username"><b> First Name: *</b></label>
                    <input type="text" placeholder="Enter First Name" class="form-control" name="txtfname" id="fname">

                   
                    <label for="username"><b> Last Name: *</b></label>
                    <input type="text" placeholder="Enter Last Name" class="form-control" name="txtlname" id="lname">
                  
                    <label for="username"><b>Tên người dùng: *</b></label>
                    <input type="text" placeholder="Enter Username, Email" class="form-control" name="txtusername"
                        id="username">
             

                    <label for="email"><b>E-mail: *</b></label>
                    <input type="text" placeholder="Enter Email" class="form-control" name="txtemail" id="email">
              

                    <label for="password"><b>Mật khẩu: *</b></label>
                    <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword"
                        id="password">
                   

                    <labe1 for="password"><b>Chức vụ: *</b></label> <br>
                        <input type="radio" id="sv" name="chkCV" value="1" checked>
                        <label for="male">Sinh Viên</label>
                        <input type="radio" id="gv" name="chkCV" value="2">
                        <label for="female">Giảng Viên</label>


                        <div class="register">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="register">Đăng Ký</button>
                        </div>
                </form>

                <div id="result"></div>

                <script>
                $('#register').click(function() {
                    var username = $('#username').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    $.ajax({
                        url: 'register_submit.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            username: username,
                            email: email,
                            password: password
                        },
                        // success: function(result) {
                        //     // if(result == 1)
                        //     //     $('#result').append('Email đã tồn tại');
                        //     // if(result == 2)
                        //     //     $('#result').append('Thêm thành công');
                        //     if ($result == 1) {
                        //         alert('Email đã tồn tại')
                        //     }
                        //     if($result == 2){
                        //         alert('Bạn đã đăng ký thành công')
                        //     }
                        // }

                    });
                    alert('Bạn đã đăng ký')
                });
                </script>

                <br>
                <form action="login.php">
                    <div class="cancel">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Trở Lại</button>
                    </div>
                </form>
            </div>

            <div class="col-xs-3 col-sm-3 ">
            </div>
        </div>
    </div>
    <script>
    // $('form').submit(function() {
    //     // Xóa trắng thẻ div show lỗi
    //     $('#showerror').html('');

    //     var username = $('#username').val();
    //     var email = $('#email').val();
    //     var password = $('#password').val();

    //     // Kiểm tra dữ liệu có null hay không
    //     if ($.trim(username) == '') {
    //         alert('Bạn chưa nhập tên đăng nhập');
    //         return false;
    //     }

    //     if ($.trim(email) == '') {
    //         alert('Bạn chưa nhập email');
    //         return false;
    //     }
    //     if ($.trim(password) == '') {
    //         alert('Bạn chưa nhập email');
    //         return false;
    //     }
    //     // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
    //     // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
    //     // vì sợ bài dài sẽ rối

    //     $.ajax({
    //         url: 'register_submit.php',
    //         type: 'post',
    //         dataType: 'json',
    //         data: {
    //             userName: username,
    //             email: email,
    //             passWord : password

    //         },
    //         success: function(result) {
    //             // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
    //             // Đây là kết quả trả về từ file do_validate.php
    //             if (!result.hasOwnProperty('error') || result['error'] != 'success') {
    //                 alert('Có vẻ như bạn đang hack website của tôi');
    //                 return false;
    //             }

    //             var html = '';

    //             // Lấy thông tin lỗi username
    //             if ($.trim(result.username) != '') {
    //                 html += result.username + '<br/>';
    //             }

    //             // Lấy thông tin lỗi email
    //             if ($.trim(result.email) != '') {
    //                 html += result.email;
    //             }

    //             // Cuối cùng kiểm tra xem có lỗi không
    //             // Nếu có thì xuất hiện lỗi
    //             if (html != '') {
    //                 $('#showerror').append(html);
    //             } else {
    //                 // Thành công
    //                 $('#showerror').append('Thêm thành công');
    //             }
    //         }
    //     });

    //     return false;
    // });
    </script>
</body>

</html>