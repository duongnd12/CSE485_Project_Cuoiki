<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>

    <?php 
    include('config.php');
    
    $id = $_GET['id'];

    // $date = date("d/m/Y h:i:a");
    
    $sql = "SELECT * FROM users WHERE id ='$id'";
    $query = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($query);
    
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-3 ">
            </div>

            <div class="col-xs-6 col-sm-6 ">
       <img src="../imgs/logo.jpg" alt="">
            <h3>Sửa thông tin</h3>
                <form method="POST" action="config_edit.php">

                    <input hidden type="text" class="form-control" name="id" value="<?php echo $row['id'] ;?>">

                    <label for="fname">Firstname</label> <br>
                    <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname'] ; ?>">
                    
                    <label for="lname">Lasttname</label> <br>
                    <input type="text" class="form-control" name="lname" value="<?php echo $row['lastname'] ; ?>">
                
                    <label for="username">Username</label> <br>
                    <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ; ?>">
                    
                    <label for="username">Email</label> <br>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ; ?>">
                    

                    <label for="chucvu">Chức vụ</label>

                    <?php if($row['level'] == 1){?>
                    <input type="radio" name="rdCV" value="1" checked> Sinh Viên
                    <input type="radio" name="rdCv" value="2"> Giảng viên
                    <?php }else{ ?>
                    <input type="radio" name="rdCv" value="1"> Sinh Viên
                    <input type="radio" name="rdCV" value="2" checked> Giảng Viên
                    <?php } ?>

                    <?php if($row['level'] == 0){?>
                    <input type="radio" name="rdCV" value="0" checked> Admin

                    <?php }?>
                    <br>



                    <!-- <input type="submit" value="Save" class="save"> -->
                  
                    <button type="submit" class="btn btn-success" >Save</button>
                   
                </form>
               
            </div>

            <div class="col-xs-3 col-sm-3 ">
            <a class="btn btn-primary" href="index.php" role="button" style="margin-top: 500px;">Cancel</a>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>