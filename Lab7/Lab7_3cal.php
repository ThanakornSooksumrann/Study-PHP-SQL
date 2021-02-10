<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ตัวอย่าง Function ที่ 3 </title>
    </head>
    <body>
        <?php
            echo "<h3>";
            if ( isset($_GET['data']) ) {
                $data = $_GET['data'];
                $len = strlen( $data );
                echo "ตัวแปร \$data มีความยาวทั้งหมด = ".$len." ตัวอักษร<br>";
                echo "ตัวแปร \$data ตัดช่องว่างด้านหน้า = '" . ltrim( $data) . "'<br>";
                echo "ตัวแปร \$data ตัดช่องว่างด้านหลัง = '" . rtrim( $data) . "'<br>";
                echo "ตัวแปร \$data ตัดช่องว่างทั้งด้านหน้าและด้านหลัง = '" . trim($data)."'<br>";
                $data = trim( $data );
                $len = strlen( $data );
                echo "ตัวแปร \$data มีความยาวเหลือ = " . $len . " ตัวอักษร<br>";
                echo "ตัวแปร \$data มีค่าเป็นตัวใหญ่ทั้งหมด = '" . strtoupper($data) . "'<br>";
                echo "ตัวแปร \$data มีค่าเป็นตัวเล็กทั้งหมด = '" . strtolower($data) . "'<br>";
                for($n = 0 ; $n < $len ; $n++) {
                    echo $data[$n] ." is ascii value " . ord( $data[$n] ) . "<br>";
                }
            }
            else {
                echo "ไม่ได้ประกาศตัวแปร data ";
            }
            echo "</h3>";
        ?>
    </body>
</html>