<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font size="4">
    <?php
    $name = "สมชาย";
    $age = 30;
    $country = "ประเทศไทย";
    echo '<b>Single Quote:</b> My name is ',$name, $age ,'years old from ',$country,'<br />';
    echo "<b>Double Quote:</b> My name is $name, $age years old from $country";
    ?>
</body>
</html>