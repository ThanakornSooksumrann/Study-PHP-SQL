<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        body {
            margin: 50px;
            padding: 20px;
        }
        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
    <center>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <
        <label>Number:</label>
        <input type="number" name="number">
        <input name="submit" type="submit" class="button2" value="ส่งค่า">
      </form>
      <?php
        $num = $_POST['number'];
        $z = 0;
        for ($i = 0 ; $i < strlen($num) ; $i++) {
          if($num[$i] != 0) {
            ($num[$i] % 2 == 0) ? $eve += 1 : $odd += 1;
          }
          else{
            $z += 1;
          }
        }
        echo ("Odd:".$odd."<br>");
        echo ("Eve:".$eve."<br>");
        echo ("Zero:".$z."<br>");
      ?>
    </center>
</body>
</html>