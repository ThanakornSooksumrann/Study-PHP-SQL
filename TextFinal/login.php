<?php
    session_start();
    if(isset($_SESSION['status'])){
        if($_SESSION['status'] == 1){
            header("location:admin.php");
        }else{
            header("location:user.php");
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
            <div class="col-12 d-flex justify-content-center align-items-center" style="height:100vh;">
                <form action="chk_login.php" method="post" width="100%">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1>Log In</h1>
                        </div>
                        <div class="col-6 mb-3 mt-3">
                        <label for="username" class="form-label">ชื่อผู้ใช้</label>
                        <input name="username" type="text" class="form-control" require>
                        </div>
                        <div class="col-6 mb-3 mt-3">
                        <label for="password" class="form-label">รหัส</label>
                        <input name="password" type="text" class="form-control" require>
                        </div>       
                        <div class="col-6 mb-3 mt-3">
                            <button class="btn btn-primary form-control">เข้าสู่ระบบ</button>
                        </div>
                        <div class="col-6 mb-3 mt-3">
                            <a href="register.php" class="btn btn-warning form-control">สมัคร</a>
                        </div>     
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" 
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" i
    ntegrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>