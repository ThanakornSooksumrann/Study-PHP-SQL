<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-4 </title>
</head>

<body>
    <?php
    $link[] = "http://www.google.co.th";
    $link[] = "http://www.yahoo.com";
    $link[] = "http://www.hotmail.com";
    $fp = fopen("link.html", "w");
    for ($i = 0; $link[$i] != ""; $i++) {
        $data = "<a href = '$link[$i]'>" . $link[$i] . "</a><br>\n";
        fputs($fp, $data);
    }
    echo "<h3>Write File Finish...</h><br>";
    echo "<a href='link.html'> test file </a>";
    fclose($fp);
    ?>
</body>

</html>