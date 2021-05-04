<?php
    require('query.php');
    $load = new query();
    $sql = $load->joinTable();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>
                    Show Data
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr align=center>
                            <th>ลำดับ</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>ชื่อสินค้า</th>
                            <th>วันที่ซื้อ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($data = $sql->fetch_assoc()):
                        ?>
                        <tr align=center>
                                <td><?=@++$i?></td>
                                <td><?=$data['username']?></td>
                                <td><?=$data['product']?></td>
                                <td>
                                    <?php 
                                        $time = new DateTime($data['datesave']); 
                                        echo $time->format('d-M-Y')
                                    ?>
                                </td>
                        </tr>
                        <?php
                            endwhile;
                        ?>
                    </tbody>
                </table>
                
                

            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>