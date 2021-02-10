<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> บทที่ 8 ตัวอย่างการสร้างและใช้User Define Function ที่ 1 </title>
        <?php
            function say_Hello() {
                echo "<hr>Hello PHP<hr><br>";
            }
        ?>
    </head>
    <body>
        <h3> การเรียกฟังก์ชันครั้งที่ 1 : </h3>
        <?php
            say_Hello();
        ?>
        <h3> การเรียกฟังก์ชันครั้งที่ 2 : </h3>
        <?php
            Say_Hello();
        ?>
        <h3> การเรียกฟังก์ชันครั้งที่ 3 : </h3>
        <?php
            Say_hello();
        ?>
    </body>
</html>