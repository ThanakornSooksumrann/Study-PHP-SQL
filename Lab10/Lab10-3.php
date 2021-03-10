<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-3 </title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt ", "r");
    $first = true;
    if ($fp) {
        while (!feof($fp)) {
            $data = @fgets($fp);
            echo $data . "<br>";
        }
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ ! </body></html>");
    }
    ?>
</body>

</html>