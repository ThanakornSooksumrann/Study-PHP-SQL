<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 3 </title></head>
</head>
<body>
<?php
$score = 70;
$name = "Nitigan";
echo "Student Name : <b>$name </b><br/>";
echo "Student Score : <b>$score </b><br/>";

if ($score >= 80)
echo "Student Grade : <b>A </b><br/>";
elseif ($score >= 70)
echo "Student Grade : <b>B </b><br/>";
elseif ($score >= 60)
echo "Student Grade : <b>C </b><br/>";
elseif ($score >= 50)
echo "Student Grade : <b>D </b><br/>";
else
echo "Student Grade : <b>F </b><br/>";

?>
</body>
</html>