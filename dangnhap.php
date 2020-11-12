<?php
session_start();
include('./head.php');
include('./db_connect.php');
?>
<?php
if (isset($_SESSION['email'])) {
    header('Location: http://localhost:8080/CSE485_Project_Cuoiki-duong/index.php');
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from users";

    $result = mysqli_query($conn, $sql);
    $user = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($user, array($row["email"], $row["password"]));
        }
    }

    foreach ($user as $key => $value) {
        $email_db = $value[0];
        $password_db = $value[1];


        // var_dump(password_verify($password, $password_db));
        // var_dump($email);
        // var_dump($email_db);

        // die;
        if (password_verify($password, $password_db)) {
           

            $sql = "SELECT U.permission, U.name, U.tel from users as U WHERE U.email = '" . $email . "'";
            $result = mysqli_query($conn, $sql);
            $user =  mysqli_fetch_assoc($result);
            if($user['permission'] == 2) die('Bạn cần kích hoạt tài khoản trước khi đăng nhập!');
             // Set session variables
             $_SESSION["email"] = $email;
             $_SESSION["password"] = $password;
           
            // Lay ten 
            $x = explode(" ", $user['name']);
            $_SESSION["name"] = $x[count($x) - 1];
            header('Location: http://localhost:8080/CSE485_Project_Cuoiki-duong/index.php');
        } else {
            die('Dang nhap that bai');
        }
    }
}



?>

<div class="container">
    <div class="col-6 mx-auto">
        <!-- Default form login -->
        <form action="dangnhap.php" method="POST" class="text-center border border-light p-5" action="#!">

            <p class="h2 mb-4" style="color: #117a8b">Đăng Nhập</p>

            <!-- Email -->
            <input required type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="email">

            <!-- Password -->
            <input required type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
        </form>
        <!-- Default form login -->
    </div>
</div>

<?php
include('./footer.php');
?>