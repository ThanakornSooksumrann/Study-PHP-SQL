<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 9 </title></head>
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
            <label>Start Number</label><br>
            <input type="number" name="start" ><br>
            <label>End Number</label><br>
            <input type="number" name="end" ><br>
            <label>Divide by</label><br>
            <input type="number" name="div" ><br>
            <input name="submit" type="submit" class="button2" value="ส่งค่า"><br>
        </form>
    <?php
        @$start = $_POST['start'];
        @$end = $_POST['end'];
        @$div = $_POST['div'];
        if(isset($_POST['submit'])){
            do {
                if ($start % $div == 0) {
                    echo (" ");
                    echo ($start);
                }
                $start++;
            }while($start <= $end );
        }
    ?>
    </center>
</body>
</html>