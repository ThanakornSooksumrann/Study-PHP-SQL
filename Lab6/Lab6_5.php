<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 5 </title></head>
</head>
<body>
<?php
$grade = 'A';
$point = 0;
switch( $grade) {

    case 'A' : $point = 4; break;
    case 'B+' : $point = 3.5; break;
    case 'B' : $point = 3; break;
    case 'C+' : $point = 2.5; break;
    case 'C' : $point = 2; break;
    case 'D+' : $point = 1.5; break;
    case 'D' : $point = 1; break;
    case 'F' : $point = 0;
    }
    echo "Subject 060213206 Web Programming<br/>";
    echo "You got $grade and has $point points.<br/>";
    
    ?>
    </body>
    </html>