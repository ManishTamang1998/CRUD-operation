<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center">Display Table Data</h1>
        <br>
        <table class="table table-striped table-hover table-bordered">

            <tr>

                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>

            </tr>

        <?php

            include 'conn.php';
            $q = "SELECT * FROM `crudtable`";
            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){

        ?>

            <tr class="text-center">

                <th><?php echo $res['id'] ?></th>
                <th><?php echo $res['username'] ?></th>
                <th><?php echo $res['email'] ?></th>
                <th><?php echo $res['password'] ?></th>
                <th><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></th>
                <th><button class="btn-danger btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></th>

            </tr>


            <?php
                }
            ?>


        </table>

    </div>
    </div>

</body>
</html>