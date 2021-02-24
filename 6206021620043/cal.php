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
        $fruit = $_POST['fruit'];
        $wid = $_POST['wid'];
        $kg = $_POST['kg'];
        $c = "";
    ?>
    <?php echo '<img src="img/', $fruit ,'.jpg" width="', $wid ,'px">'?>
    <?php 
        if($fruit = 1){
            $sum = 100*$kg;
            $c = 100;
        }
        else if($fruit = 2){
            $sum = 200*$kg;
            $c = 200;
        }
        else {
            $sum = 300*$kg;
            $c = 300;
        }
    ?>
    <div style="width: 280px; text-align:left;" >
        ราคาต่อกิโล :<?php echo $c; ?> บาท<br>
        จำนวนกิโล :<?php echo $kg; ?> Kg<br>
        ราคารวม :<?php echo $sum; ?> บาท<br>
        <form action="form.php" method="POST"><input type="submit" name="back" value="Back"></form>
    </div>
</center>
</body>
</html>