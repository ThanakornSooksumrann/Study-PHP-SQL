<?php
    session_start();
    require('query.php');
    if(isset($_SESSION['user_id'])){
        if($_SESSION['status'] == 1){
            header("location:admin.php");
        } else {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="height:100vh;">
                <form action="#" method="post" width="100%">
                   <div class="row">
                        <div class="col-12 text-center">
                            <h1>
                                Register
                            </h1>
                        </div>
                        <div class="col-6 mb-3 mt-3">
                            <label for="username" class="form-label">ชื่อผู้ใช้</label>
                            <input name="username" type="text" class="form-control" required >
                        </div>
                        <div class="col-6 mb-3 mt-3">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <div class="col-12 mb-3 mt-3">
                            <button name="Regis" class="btn btn-primary form-control">สมัครสมาชิก</button>
                            <a href="login.php" class="btn btn-secondary form-control mt-2">เข้าสู่ระบบ</a>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['Regis'])){
        $regis = new query();
        $sql = $regis->register($_POST['username'],$_POST['password']);
        if($sql){
            echo "<script>
                alert('$sql');
                window.location.href='login.php';
            </script>";
        }

    }
?>