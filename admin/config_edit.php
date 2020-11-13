<?php
    include("config.php");

    if($_POST){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $level = $_POST['rdCV'];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sqlupdate = "UPDATE users SET firstname = '$fname', lastname = '$lname', username = '$username', email = '$email', level = '$level' WHERE id = $id";
      
        $query = mysqli_query($conn, $sqlupdate);
        if ($query) {
          
            header("Location:index.php");         
        } else {
            echo "<script type='text/javascript'>alert('Sửa thông tin không thành công');</script>";
        }
        
    }       
    //$conn->close();   
?>