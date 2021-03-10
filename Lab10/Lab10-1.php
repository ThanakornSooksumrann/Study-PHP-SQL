<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-1 </title>
</head>

<body>
    <?php
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        while (!feof($fp)) {
            $data = @fgets($fp);
            echo $data . "<br>";
        }
        fclose($fp);
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !</body></html>");
    }
    ?>
</body>

</html>