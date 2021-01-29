<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW1</title>

    <style>
    body {
        margin: 80px;
        padding: 20px;
    }
    </style>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $sum = '';
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            if(!empty($_POST['choice'])){
                switch ($_POST['choice']) {
                case 'Minnimum':
                    $sum = min($num1,$num2,$num3);
                    break;
                case 'Maximum':
                    $sum = max($num1,$num2,$num3);
                    break;
                case 'Average':
                    $sum = ($num1 + $num2 + $num3)/3;
                    break;
                }
            }
        }
    ?>
</head>

<!-- Main -->

<body>
    <center>
        <div>
            <h1>HW1: Find Min Max Average</h1>
        </div>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label>Num 1: </label>
                <input type="number" name="num1" style="width: 20%;" required>
                <br><br><label>Num 2: </label>
                <input type="number" name="num2" style="width: 20%;" required>
                <br><br><label>Num 3: </label>
                <input type="number" name="num3" style="width: 20%;" required>
                <br><br><input type="radio" name="choice" value="Minnimum" required>Minnimum
                <input type="radio" name="choice" value="Maximum">Maximum
                <input type="radio" name="choice" value="Average">Average
                <br><br><button type="submit">Submit</button>
                <button type="reset">Clear</button>
            </form>
        </div>
        <br><br>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            echo $_POST['choice']." number = $sum";
        }
        ?>
    </center>
</body>

</html>