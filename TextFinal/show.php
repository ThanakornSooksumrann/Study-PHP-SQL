<?php 
    require('query.php');
    $load = new query();
    $sql = $load->showData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5 bt-5">
                <h1><span class="badge rounded-pill bg-warning">SHOW DATA</span></h1>
            </div>
            <div class="col-12">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูป</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคาสินค้า</th>
                            <th>แก้ไข / ลบ</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                    <?php while($data = $sql->fetch_assoc()): ?>
                    <tr>
                        <td><?= @++$i ?></td>
                        <td><img src="uploads/<?= $data['p_pic'] ?>" width="80px" ></td>
                        <td><?= $data['p_name'] ?></td>
                        <td><?= $data['p_price'] ?></td>
                        <td>
                            <div class="btn-groub" role="groub" aria-label="Basic example">
                                <a href="update.php?p_id=<?= $data['p_id'] ?>" class="btn btn-warning">แก้ไขข้อมูล</a>
                                <a href="del.php?p_id=<?= $data['p_id'] ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบใช่ไหม')">ลบข้อมูล</a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
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