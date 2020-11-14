<?php 
// Lấy thông tin username và email

// $fname = isset($_POST['txtfname']) ? $_POST['txtfname'] : "";
// $lname = isset($_POST['txtlname']) ? $_POST['txtlname'] : "";
// $username = isset($_POST['txtusername']) ? $_POST['txtusername'] : "";
// $email = isset($_POST['txtemail']) ? $_POST['txtemail'] : "";
// $password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : "";
// $level = isset($_POST['rdCV']) ? $_POST['rdCV'] : "";



// // Mã khóa mật khẩu
// $password = md5($password);
 
// // Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
// if (!$username && !$email){
//     die ('Bạn chưa nhập thông tin');
// }
 
// // Kết nối database
// // $conn = mysqli_connect('localhost','id11184867_root','12345','id11184867_nguyentatthanh'); 000webhost
// // $conn = mysqli_connect('localhost', 'root','', 'dhtl') or die ('Không kết nối đến database');
// include 'config.php';
// //Khai báo utf-8 để hiển thị được tiếng việt
// mysqli_set_charset($conn,'UTF8');
// // header('Content-Type: text/html; charset=UTF-8');

// $sql = "SELECT * FROM users WHERE email = '$email' AND username = '$username'";
// $data = mysqli_query($conn, $sql);
// $result = mysqli_num_rows($data);

// $adduser = "insert into users (username, email, password) value ($username,$email,$password)";
// $query = mysqli_query($conn, $adduser );
// var_dump($query);
// echo "Đăng ký thành công. <a href='index.php'>Đăng nhập ngay</a>";
// if ($data){
//     echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
//     // echo 1;
// }else{
//     // Tiến hành lưu vào CSDL nếu không có lỗi

//    $adduser= "INSERT INTO users (firstnam, lastname, username, email, password, level)
//    VALUES ('$fname', '$lname', '$username','$email','$password', '$level')";
//    mysqli_query($conn,$adduser);
   
//    if($adduser){
//     echo "Đăng ký thành công. <a href='index.php' >Đăng nhập ngay</a>";
    
//    } else echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
//     // echo 2;
// }
// $adduser= mysqli_query($conn, "INSERT INTO user (firstname, lastname, username, email, password, level) 
// VALUE ('$fname', '$lname', '$username','$email','$password', '$level')");
// if ($adduser){
//     echo "Đăng ký thành công. <a href='index.php' >Đăng nhập ngay</a>";
// } else echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
?>

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
            // if ($username == "" || $password == "" || $fname == "" || $lname == "" || $email == "" ) {
            //     echo "Bạn vui lòng nhập đầy đủ thông tin";
            // }
            // $sql = "SELECT * FROM users WHERE email = '$email' AND username = '$username'";
            // $data = mysqli_query($conn, $sql);
            // if($data){
            //      echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
            // } else{
            //     $add = "INSERT INTO users(
            //                                 firstname,
            //                                 lastname,
            //                                 username,
            //                                 email,
            //                                 password,
            //                                 level
            //                             ) VALUES (
            //                                 '$fname',
            //                                 '$lname',
            //                                 '$username',
            //                                 '$email',
            //                                 '$password',
            //                                 '$level'
            //                             )";
            //     // thực thi câu $sql với biến conn lấy từ file connection.php
            //     mysqli_query($conn,$add);
            //     header("Location:index.php");  
            //     echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>";
            //     // echo "Đăng ký thành công. <a href='index.php' >Đăng nhập ngay</a>";
            // }

            


		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
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
          
            echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
            header("Location:guest.php");  
			// echo "Đăng ký thành công. <a href='guest.php' >Đăng nhập ngay</a>";
		}
	}

?>


    
