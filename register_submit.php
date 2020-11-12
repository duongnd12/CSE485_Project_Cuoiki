<?php 
// Lấy thông tin username và email
$username = isset($_POST['txtusername']) ? $_POST['txtusername'] : "";
$email = isset($_POST['txtemail']) ? $_POST['txtemail'] : "";
$password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : "";
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";
// Mã khóa mật khẩu
$password = md5($password);
 
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$username && !$email){
    die ('Bạn chưa nhập thông tin');
}
 
// Kết nối database
// $conn = mysqli_connect('localhost','id11184867_root','12345','id11184867_nguyentatthanh'); 000webhost
$conn = mysqli_connect('localhost', 'root','', 'nguyentatthanh') or die ('Không kết nối đến database');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

$data = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email'");
$result = mysqli_num_rows($data);
// $query = mysqli_query($conn, "insert into users (userName, email, passWord) value ('$username','$email','$password')");
if ($result > 0){
    echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
    // echo 1;
}else{
    // Tiến hành lưu vào CSDL nếu không có lỗi
   $adduser= mysqli_query($conn, "INSERT INTO users (userName, email, passWord) 
   VALUE ('$username','$email','$password')");
    echo "Đăng ký thành công. <a href='home.php' >Đăng nhập ngay</a>";
    // echo 2;
}
?>