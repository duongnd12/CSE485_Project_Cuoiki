<!doctype html>
<html lang="en">

<head>
    <title>ADMIN CSE-DHTL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
h2 {
    text-align: center;
    font-family: monospace;
    font-weight: bold;
    color: white;
    background-color: blue;
}

.nav-link, .navbar-brand {
    font-weight: bold;
}


</style>

<body>
    <?php 
    include('config.php');
    
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
    
    // $row = mysqli_fetch_assoc($query);
    
    
?>

    <h2><span>CSE-DHTL</span> HỆ THỐNG QUẢN LÝ</h2>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php" style="color: red;">Khoa CNTT-DHTL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Người dùng </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bài viết</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Đăng xuất</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " type="submit" style="margin-top: -15px;">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="nvlist">
                    <div class="add">
                        <button type="button" class="btn btn-success"><a href="add.php">
                                <h6 style="color: white;">Thêm mới</h6>
                            </a></button>
                        <!-- <button> <a href="add.php"><h6 style="color: white;">Thêm mới</h6></a></button> -->
                        <!-- <button type="button" class="btn btn-success"><a href="create.php"> Thêm</a></button> -->
                    </div>


                    <table class='table'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td> <?php echo $row['id']; ?></td>
                                <td> <?php echo $row['firstname'] ;?></td>
                                <td> <?php echo $row['lastname'] ;?> </td>
                                <td> <?php echo $row['username'] ;?> </td>
                                <td> <?php echo $row['email'] ;?> </td>
                                <td> <?php echo $row['level'] ;?> </td>

                                <td>
                                    <!-- <a href="view.php?id=<?php //echo $row['id'];?>"   ><i class="far fa-eye"></i></a> -->
                                    <a href="delete.php?id=<?php echo $row['id'];?>"
                                        onclick="if (!confirm('Bạn có chắc chắn muốn xóa không?')) { return false }"><i
                                            class="fas fa-trash"></i></a>

                                </td>
                                <td> <a href="edit.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <?php
                    }
                    ?>



                        </tbody>
                    </table>
                </div>
            </div>
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