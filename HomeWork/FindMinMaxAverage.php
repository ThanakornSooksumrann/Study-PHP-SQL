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
                echo ("Maximum number = ".max($num1,$num2,$num3));
            }
            elseif($op == "mi"){
                echo ("Minimum number = ".min($num1,$num2,$num3));
            }
            elseif($op == "av"){
                echo ("Average number = ".(($num1+$num2+$num3)/3));
            }
        ?>
    </center>
    </body>
</html>