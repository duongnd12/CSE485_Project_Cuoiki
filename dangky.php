<?php
session_start();
include('./head.php');
include('./db_connect.php');
require_once('./phpmailer/sendmail.php');
?>
<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
    $tel = $_POST['tel'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `users`(`email`, `password`, `name`, `tel`, `activation_code`) VALUES ('$email','$password_hash','$name','$tel', '$password_hash')";
    
    $result = mysqli_query($conn, $sql);
    
    if($result){
        $sended = sendmail($email, "Kich Hoat Ta Khoan", "Kich hoat : <a href=http://localhost:8080/CSE485_Project_Cuoiki-duong/active.php?active_code='$password_hash'>Bấm vào đây để kích hoạt tài khoản</a>");
        if($sended) die('Vui long kiem tra email kich hoat');
    }
    
    // if($result){
    //     header('Location:dangnhap.php');
    // }
}

?>
<div class="container">
    <div class="col-6 mx-auto">
        <!-- Default form login -->
        <form action="dangky.php" method="POST" class="text-center border border-light p-5" action="#!">

            <p class="h2 mb-4" style="color: #117a8b">Đăng Ký</p>

            <!-- Email -->
            <input required type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email">

            <!-- Name -->
            <input required type="name" name="name" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Họ Và Tên">

            <!-- Tel -->
            <input required type="text" name="tel" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Số Điện Thoại">

            <!-- Password -->
            <input required type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mật Khẩu">

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Đăng Ký</button>
        </form>
        <!-- Default form login -->
    </div>
</div>

<?php
include('./footer.php');
?>