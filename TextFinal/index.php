<?php 
    require('query.php');
    if(isset($_REQUEST['addData'])){
        $create = new query();
        $sql = $create->create($_POST['p_name'], $_POST['p_des'], $_POST['p_amount'], $_POST['p_price'], $_FILES['p_pic']);
        if($sql){
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ')</script>";
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
                    <h1><span class="badge rounded-pill bg-warning">INSERT DATA</span></h1>
                </div>
                <div class="mt-5 bt-5 text-center">
                    <a href="show.php" class="btn btn-outline-warning">แสดงข้อมูล</a>
                </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6 mt-3">
                    <label for="p_name" class="form-label">ชื่อสินค้า</label>
                    <input type="text" name="p_name" class="form-control">
                </div>
                <div class="col-6 mt-3">
                    <label for="p_amount" class="form-label">จำนวนสินค้า</label>
                    <input type="number" name="p_amount" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <label for="p_des" class="form-label">รายละเอียดสินค้า</label>
                    <textarea type="text" name="p_des" class="form-control" rows="5"></textarea>
                </div>
                <div class="col-6 mt-3">
                    <label for="p_price" class="form-label">ราคาสินค้า</label>
                    <input type="number" name="p_price" class="form-control">
                </div>
                <div class="col-6 mt-3">
                    <label for="p_pic" class="form-label">อัพโหลดสินค้า</label>
                    <input type="file" name="p_pic" class="form-control">
                </div>
                <div class="col-12 mt-3 d-flex justify-content-end">
                    <button name="addData" class="btn btn-success">บันทึกข้อมูล</button>
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