<html>
    <head>
        <title>แสดงการใช้ฟังก์ชันข้อความ </title>
    </head>
    <body>
        <?php
            echo "<h3>";
            if ( isset($_GET['data']) && isset($_GET['ch']) ) {
                $data = $_GET['data'];
                $ch = $_GET['ch'] ;
                $len = strlen( $data );
                echo "ตัวแปร \$data มีความยาวทั้งหมด = ".$len." ตัวอักษร<br>";
                echo "ตัวแปร \$data มีจ านวนค าทั้งหมด = '" . str_word_count($data) . "'<br>";
                echo "ตัวแปร \$data ตัด strchr เหลือจ านวน = '" . strchr($data,$ch) . "'<br>";
                echo "ตัวแปร \$data ตัด substr เริ่ม 10 จ านวน 7 ตัว ='".substr($data,10,7)."'<br>";

                echo "ตัวแปร \$data value '" . $data . "' has <br>";
                $token = strtok ( $data , " " );
                while ( $token )
                {
                    echo $token . "<br/>";
                    $token = strtok ( " " );
                }
                echo "ตัวแปร \$data value '" . $data . "'<br>";
                echo "Now replace 'chai' with 'sri' in \$data.<br>";
                echo "Use strstr = '" . strtr( $data, "chai", "sri") . "'<br>";
                echo "Use substr = '" . substr_replace ($data,"sri", 14) . "'<br>";

                $n = strpos( $data, "chai" );
                $nlen = strlen("chai");
                $backup1 = substr( $data, 0, $n );
                $backup2 = substr( $data, $n+$nlen);
                $data = $backup1 . "sri" . $backup2;
                echo "\$data = '" . $data . "<br>";
            }
            else {
                echo "ไม่ได้ประกาศตัวแปร data ";
            }
            echo "</h3>";
        ?>
    </body>
</html>