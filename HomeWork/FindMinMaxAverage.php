<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HW1</title>
        <style>
            body {
                margin: 80px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
    <center>
        <Font Face="RSU">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1 align="center">HW1:Find Min Max Average</h1>
                <label for="Num1">Num1:</label>
                <input type="number" name="Num1" style="width: 20%;" required><br><br>
                <label for="Num2">Num2:</label>
                <input type="number" name="Num2" style="width: 20%;" required><br><br>
                <label for="Num3">Num3:</label>
                <input type="number" name="Num3" style="width: 20%;" required><br><br>
                <input type="radio" name="operator" value="mi" required> Minimum 
                <input type="radio" name="operator" value="ma"> Maximum
                <input type="radio" name="operator" value="av"> Average <br><br>
                <input name="btnSubmit" type="submit" value="Submit">
                <button type="reset">clear</button>
        </form>
        <br>
        <?php
            $num1 = $_POST['Num1'];
            $num2 = $_POST['Num2'];
            $num3 = $_POST['Num3'];
            $op = $_POST['operator'];
            if($op == "ma"){
                $sum = max($num1,$num2,$num3);
                echo ("Maximum number = ".number_format($sum));
            }
            elseif($op == "mi"){
                $sum = min($num1,$num2,$num3);
                echo ("Minimum number = ".number_format($sum));
            }
            elseif($op == "av"){
                $sum = (($num1+$num2+$num3)/3);
                echo ("Average number = ".number_format($sum));
            }
        ?>
        </Font>
    </center>
    </body>
</html>