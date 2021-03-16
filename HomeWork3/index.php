<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="myStyle.css">
    <title>Document</title>
</head>

<body>
    <?php
    $carImg = array("Accord", "Civic", "Jazz", "City");
    $carName = array("Accord", "Civic", "Jazz", "City");
    $price = array("1,799,000", "1,145,000", "754,000", "749,000");
    $vat = array("2.00", "2.00", "4.00", "4.00");
    ?>
    <div class="header">
        <center><img src="pic/header.jpg" width="60%" height="300px"></center>
    </div>
    <center>
        <div style="width: 60%;">
            <form action="CalculateCar.php" method="POST">
                <fieldset align="center">
                    <legend>Car Model</legend>
                    <center>
                        เลือกรุ่นรถยนต์
                        <select name="car">
                            <option>Accord</option>
                            <option>Civic</option>
                            <option>Jazz</option>
                            <option>City</option>
                        </select>
                        <input type="submit" name="sub" value="Submit"><br><br>
                        <table border="1">
                            <tr align="center">
                                <td>ภาพรถยนต์</td>
                                <td>รุ่น<br>รถยนต์</td>
                                <td>ราคารถยนต์<br>(บาท)</td>
                                <td>อัตราดอกเบี้ย ต่อปี(ร้อยละ,%)</td>
                            </tr>
                            <?php for ($c = 0; $c < 4; $c++) { ?>
                                <tr align="center">
                                    <td><?php echo '<img src="pic/', $carImg[$c], '.png" width="100px"'; ?>></td>
                                    <td><?php echo $carName[$c]; ?></td>
                                    <td><?php echo $price[$c]; ?></td>
                                    <td><?php echo $vat[$c]; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </center>
                </fieldset>
            </form>
        </div>
    </center>
</body>

</html>