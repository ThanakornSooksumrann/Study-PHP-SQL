<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <Font Face="RSU">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h1 align="center">HW2 : Sum of number</h1><br>
            <label>Num1:</label>
            <input type="number" name="Num1" style="width: 20%;" required><br>
            <input type="radio" name="op1" value="+" required> + 
            <input type="radio" name="op1" value="-"> -
            <input type="radio" name="op1" value="*"> *
            <input type="radio" name="op1" value="/"> / <br>
            <label>Num2:</label>
            <input type="number" name="Num2" style="width: 20%;" required><br>
            <input type="radio" name="op2" value="+" required> + 
            <input type="radio" name="op2" value="-"> -
            <input type="radio" name="op2" value="*"> *
            <input type="radio" name="op2" value="/"> / <br>
            <label>Num3:</label>
            <input type="number" name="Num3" style="width: 20%;" required><br><br>
            <input name="btnSubmit" type="submit" value="Submit">
            <button type="reset">clear</button>
            </form><br>
            <?php
                $num1 = $_POST['Num1'];
                $num2 = $_POST['Num2'];
                $num3 = $_POST['Num3'];
                $op1 = $_POST['op1'];
                $op2 = $_POST['op2'];
                $sum = 0;
                function check_sum()
                {
                    global $num2;
                    global $sum;
                    if ($sum == '') $sum = $num2;
                }   
                if ($op1 == "*" || $op1 == "/" || $op2 == "*" || $op2 == "/") {
                    if ($op1 == "*") {
                        check_sum();
                        $sum = $num1 * $sum;
                    }
                    if ($op1 == "/") {
                        check_sum();
                        $sum = $num1 / $sum;
                    }
                    if ($op2 == "*") {
                        check_sum();
                        $sum = $sum * $num3;
                    }
                    if ($op2 == "/") {
                        check_sum();
                        $sum = $sum / $num3;
                    }
                }
                if ($op1 == "+" || $op1 == "-" || $op2 == "+" || $op2 == "-") {
                    if ($op1 == "+") {
                        check_sum();
                        $sum = $num1 + $sum;
                    }
                    if ($op1 == "-") {
                        check_sum();
                        $sum = $num1 - $sum;
                    }
                    if ($op2 == "+") {
                        check_sum();
                        $sum = $sum + $num3;
                    }
                    if ($op2 == "-") {
                        check_sum();
                        $sum = $sum - $num3;
                    }
                }
                echo ("Sum of number = ".$sum);
            ?>
        </Font>
    </center>
</body>
</html>