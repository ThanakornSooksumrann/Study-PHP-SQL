<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ตัวอย่าง Function ที่ 2 </title>
    </head>
    <body>
        <?php
            echo "<h3>";
            if ( isset($_GET['data']) ) {
                $data = $_GET['data'];
                echo "ตัวแปร data : ";
                if ( empty( $data ) ) echo " ไม่มีค่า ";
                else echo "มีค่า $data";
                echo "<br>";

                echo "ตัวแปร data : Type " . getType( $data ) . "<br>" ;
                echo "ตัวแปร data : ";
                if ( is_string( $data ) ) echo " is string";
                else echo " is numeric";
                echo "<br>";
                // case int
                $intdata = intval( $data );
                echo "ตัวแปร intdata value $intdata : ";
                if ( is_int( $intdata ) ) echo " is integer";
                echo "<br>";
                // case float
                $floatdata = floatval( $data );
                echo "ตัวแปร floatdata value $floatdata : ";
                if ( is_float( $floatdata ) ) echo " is float";
            }
            else {
                echo "ไม่ได้ประกาศตัวแปร data ";
            }
            echo "</h3>";
        ?>
    </body>
</html>