<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> ตัวอย่าง Control statement ที่ 10 </title></head>
    </head>
    <body>
        <?php
            $start = -2; $end = 3;
            for($num = $start ; $num <= $end ; $num++) {
                if ($num == 0) {
                echo "*** ข้ามการหารด้วยศูนย์ เพื่อไม่ให้เกิดความผิดพลาด ***<br>";
                continue;//ข้ามการทำงานใน for 1 รอบ
                }
                echo "100 / $num = " . (100 / $num) . " <br>";
            }
        ?>
    </body>
</html>