<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="test.php">
<?php
$nameArray = array();
for($i=0;$i < 10;$i++){ 
  echo '<input type="text" name="members[]"><br>';
}
?>
<input type="submit" value=" ส่ง "><br>
<form>
<?php
    $mm = $_POST['members'];
    for($i=0;$i < 10;$i++){
        echo $mm[$i],'<br>';
    }
?>
</body>
</html>