<?php

include 'conn.php';


if(isset($_POST['done'])){

    $id= $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = " UPDATE `crudtable` SET `id`='$id',`username`='$username',`email`='$email',`password`='$password' WHERE id=$id ";

    $query = mysqli_query($con,$q);

    header('location:display.php');

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="col-lg-6 m-auto">
        
        <form action="" method="post">

            <br>
            <br>
            <br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation</h1>
                </div>
                <br><br><br>
                <label for="text">User Name</label>
                <input type="text" name="username" class="form-control" placeholder="enter username"><br>

                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="enter email"><br>

                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" placeholder="enter password"><br><br>

                <button class="btn btn-success" type="submit" name="done">Submit</button>
            </div>

        </form>
    </div>
    
</body>
</html>