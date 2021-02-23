<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
            $name = $_POST['name'];
            $per = $_POST['per'];
            $payment = $_POST['payment'];
            $money = $per * $payment;
        ?>
        <?php function carCheck($money){ ?>
            <?php if($money >= 749000){ ?>
                <tr>
                    <td colspan="2">รถยนต์รุ่นที่ทันสามารถเลือกซื้อได้</td>
                </tr>
                <?php }if($money >= 1799000){ ?>
                <tr>
                    <td><img src="img/Accord.png" width="400px" height="300px"></td>
                    <td>ราคา 1,799,000 บาท</td>
                </tr>
                <?php }if($money >= 1149000){ ?>
                <tr>
                    <td><img src="img/Civic.png" width="400px" height="300px"></td>
                    <td>ราคา 1,149,000 บาท</td>
                </tr>
                <?php }if($money >= 849000){ ?>
                <tr>
                    <td><img src="img/Jazz.png" width="400px" height="300px"></td>
                    <td>ราคา 849,000 บาท</td>
                </tr>
                <?php }if($money >= 749000){ ?>
                <tr>
                    <td><img src="img/City.png" width="400px" height="300px"></td>
                    <td>ราคา 749,000 บาท</td>
                </tr>
                <?php }if($money < 749000){ ?>
                <tr>
                    <td colspan="2">ยอดรวมเงินของท่านไม่เพียงพอ ที่จะซื้อรถยนต์ได้</td>
                </tr>
                <?php } ?>
        <?php } ?>
        <form action="CarPay.php" method="POST">
            <table border="2">
                <tr>
                    <td>ชื่อลูกค้า :</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>ผ่อนงวดละ :</td>
                    <td><?php echo $per; ?></td>
                </tr>
                <tr>
                    <td>จำนวนงวด :</td>
                    <td><?php echo $payment; ?></td>
                </tr>
                <tr>
                    <td>ยอดรวมเงิน :</td>
                    <td><?php echo $money; ?></td>
                </tr>
                <?php echo carCheck($money); ?>
                <tr align="center">
                    <td colspan="2"><input type="submit" name="back" value="Back to Home"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>