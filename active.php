<?php
require_once('./db_connect.php');
$active_code = $_GET['active_code'];

$sql = "SELECT U.permission, U.name, U.tel, U.password from users as U WHERE U.password = '" . $active_code . "'";
$result = mysqli_query($conn, $sql);
$user =  mysqli_fetch_assoc($result);

$active_code_db = $user['password'];

if ($active_code == $active_code_db) {
    $sql = "UPDATE users as U SET `permission`=1 WHERE U.password =  '" . $active_code . "'";
    $result = mysqli_query($conn, $sql);
    header('Location:dangnhap.php');
}else{
    die('Mã kích hoạt của bạn sai!');
}

