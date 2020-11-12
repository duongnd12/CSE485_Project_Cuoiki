<?php
session_start();
if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['name']);
    header('Location: http://localhost:8080/CSE485_Project_Cuoiki-duong/index.php');
}
