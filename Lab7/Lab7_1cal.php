<!DOCTYPE html>
<!-- ชื่อไฟล์ : Exam07-01cal.php-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ตัวอย่าง Function ที่ 1 </title>
    </head>
    <body>
        <?php
            echo "<h3>";
            if ( isset($_GET['day'])&&isset($_GET['month'])&&isset($_GET['year']) )
            {
                $day = $_GET['day'];
                $month = $_GET['month'];
                $year = $_GET['year'];
                echo "วันที่ $day เดือน $month ปี $year ";
                if ( checkdate( $month, $day, $year) )
                    echo " เป็นวันที่มีอยู่จริง";
                else
                    echo " เป็นวันที่ไม่มีอยู่จริง";
            }
            else {
                echo "ข้อมูลไม่ครบ";
            }
            echo "</h3><br>";

            echo "<hr />";
            echo "วันนี้ วันที่ " . date("d-M-Y") . ", เวลา : " . date("H:i:s")."<br>";
            echo "<hr /><br>";

            echo "<ul>แสดงตัวอย่างการก าหนดรูปแบบของ date";
            echo "<li>บรรทัด 1: " . date("F j, Y, g:i a") ;
            echo "<li>บรรทัด 2: " . date("วันที่ j เดือน F ปี ค.ศ. Y, เวลา G.i น.") . "<br>";
            echo "<li>บรรทัด 3: " . date("m.d.y") . "<br>";
            echo "<li>บรรทัด 4: " . date("j, n, Y") . "<br>";
            echo "<li>บรรทัด 5: " . date("Ymd") . "<br>";
            echo "<li>บรรทัด 6: " . date("it is the jS day") . "<br>";
            //สังเกตว่า Format String ในบรรทัดนี้เป็นค่าสตริงแบบ Single Quote
            //เพื่อไม่ให้ \t ถูกตีความเป็นตัวอักษรแท็บ
            echo "<li>บรรทัด 7: " . date('\i\t \i\s \t\h\e jS \d\a\y.') . "<br>";
            echo "<li>บรรทัด 8: " . date("H:i:s") . "<br>";
            echo "<li>บรรทัด 9: " . date("c") . "<br>";
            echo "<li>บรรทัด 10: " . date("r") . "<br>";
            echo "</ul>";
        ?>
    </body>
</html>