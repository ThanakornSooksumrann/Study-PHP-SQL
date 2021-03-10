<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-2 </title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt", "r");
    $first = true;
    if ($fp) {
        echo "<table border='1' align='center' width='50%'>";
        while (!feof($fp)) {
            $data = @fgetc($fp);
            if ($first) {
                echo "<tr><td align='center'>" . $data;
                $first = false;
            } else {
                if ($data == ",") echo "</td><td align='center'>";
                else if ($data == "\n") {
                    echo "</td></tr>";
                    $first = true;
                } else echo $data;
            }
        }
        echo "</table>";
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ ! </body></html>");
    }
    ?>
</body>

</html>