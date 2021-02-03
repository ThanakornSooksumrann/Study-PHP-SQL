<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 1 </title>
</head>
<body>
    <?php
        $a = -5; $b = 1;
        $name = "Nitigan";
        if ($b > $a)
        echo "บรรทัด 1: \$a มีค่ามากกว่า \$b <br/>";
        if ( $a) echo "บรรทัด 2: $a <br/>";
        if ( $b) echo "บรรทัด 3: $b <br/>";
        if ( $name) echo "บรรทัด 4: $name <br/>";
    ?>
</body>
</html>