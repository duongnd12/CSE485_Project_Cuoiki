<?php 
header("Content-type: text/html; charset=utf-8");

$host = 'localhost' ;
$user = 'root' ;
$pass = '';
$db_name = 'dhtl' ;

$conn = mysqli_connect($host, $user, $pass, $db_name) ;
// mysqli_query($conn,"SET NAMES 'UTF8'");
mysqli_set_charset($conn, 'UTF8');
if ($conn->connect_error) {
    die('Kết nối với Database thất bại' . $conn->connect_error) ;
}
?>