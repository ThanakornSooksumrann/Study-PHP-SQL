<?php 
    session_start();
    require('query.php');
    if(isset($_REQUEST['addData'])){
        $adduser = new query();
        $sql = $adduser->adduser($_POST['username'], $_POST['password'], $_POST['status']);
        if($sql){
            $_SESSION['status'] = $_POST['status'];
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" >
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h1><span class="badge rounded-pill bg-warning">REGISTER</span></h1>
                </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6 mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="col-6 mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="col-6 mt-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="number" name="status" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <button name="addData" class="btn btn-success">register</button>
                </div>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" 
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" i
    ntegrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>