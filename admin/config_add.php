<?php
	if (isset($_POST["btn_submit"])) {
        //lấy thông tin từ các form bằng phương thức POST
        $fname = $_POST["txtfirstname"];
        $lname = $_POST["txtlastname"];
        $username = $_POST["txtusername"];
		$email = $_POST["txtemail"];
        $password = $_POST["txtpassword"];
        $level = $_POST['rdCV'];
        // Mã khóa mật khẩu
        $password = md5($password);
        // Kết nối
        include 'config.php';
        //Khai báo utf-8 để hiển thị được tiếng việt
        mysqli_set_charset($conn,'UTF8');
        // header('Content-Type: text/html; charset=UTF-8');
            

            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
          
            
                //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                
                // $sql = "SELECT * FROM users WHERE email = '$email' AND username = '$username'";
                // $data = mysqli_query($conn, $sql);
                // if($data){
                //          echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
                // } 


                if ($username == "" || $password == "" || $fname == "" || $lname == "" || $email == "" ) {
                    echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{
                    $add = "INSERT INTO users(
                                                firstname,
                                                lastname,
                                                username,
                                                email,
                                                password,
                                                level
                                            ) VALUES (
                                                '$fname',
                                                '$lname',
                                                '$username',
                                                '$email',
                                                '$password',
                                                '$level'
                                )";
        // thực thi câu $sql với biến conn lấy từ file connection.php
                    mysqli_query($conn,$add);
                    header("Location:index.php");  
                    echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
                }
            }
            
        
?>