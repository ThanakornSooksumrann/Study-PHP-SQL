<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 6 </title></head>
</head>
<body>
<?php
$num = 1;
while ( $num < 10) {
if ($num % 2 == 0) echo "$num is Even Number <br>";
else echo "$num is Odd Number <br>";
$num ++;
}
?>
</body>
</html>