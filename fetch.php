<?php   
    require('connection.php');

    $result = $connection->query("SELECT * FROM `users`");
    $data = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch table record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                if(!empty($data)){
                            ?>
                            <?php 
                               $i = 1;
                                foreach($data as $d){
                            ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $d['name']; ?></td>
                                <td><?= $d['email']; ?></td>
                                <td><?= $d['mobile']; ?></td>
                                <td><?= $d['gender']; ?></td>
                                <td>
                                    <a href="fetch/edit.php?id=<?= $d['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="fetch/delete.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; }}else{ ?>
                                <h3 class="text-danger">No Record Found!!</h3>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>