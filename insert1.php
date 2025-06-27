<?php  
    require 'connection.php';

    extract($_POST);

    if(isset($insertbtn)){
        $result = $connection->query("INSERT INTO `checkdetail`(`name`, `email`, `mobile`, `gender`, `address`, `password`) VALUES 
        ('$name','$email','$mobile','$gender','$address','$password')");
        if($result){
            header('location:paint.php');
        }else{
            echo 'Failed To Insert';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card mt-4">
                <div class="card-body">
                    <h3 class="bg-success text-white p-2 text-center">SAVE USER INFO</h3>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">gender</label>
                            <input type="text" class="form-control" name="gender">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">password</label>
                            <input type="text" class="form-control" name="password">
                        </div>

                        <button type="submit" name="insertbtn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>