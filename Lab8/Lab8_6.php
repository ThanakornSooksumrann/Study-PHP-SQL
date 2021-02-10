<?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    
    // declare function page_footer
    function page_footer($message) {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    function TestValue( $num) {
        $num = $num + 10;
    }
    function TestReference( &$num) {
        $num = $num + 20;
    }
    function show_form() {
        echo ' <form method="get" action="ch8-6.php">';
        echo '<table border="1" align="center" width="400">';
        echo '<tr><td colspan="2" align="center"><big>การส่งค่าอาร์กิวเมนต์</big></td></tr>';
        echo '<tr><td>การส่งแบบ : </td><td>';
        echo 'Enter number : <input type="text" name="num" value=""> <br>';
        echo '<input type="radio" name="type" value="1"> Pass by Value <br>';
        echo '<input type="radio" name="type" value="2"> Pass by Reference <br>';
        echo '</td><tr>';
        echo '<tr><td colspan="2" align="center">';
        echo '<input type="submit" value=" OK " />';
        echo '<input type="reset" value=" Clear " /></td></tr></table></form> ';
    }

    // main Program
    page_header("การส่งผ่านค่าอาร์กิวเมนต์", "EEDDFF");
    if (isset($_GET['type'])) {
        $num = intval($_GET['num']);
        $n = intval($_GET['type']);
        show_form();
        echo '<hr>';
        if ($n == 1) {
            echo "การเรียกใช้ฟังก์ชันแบบ Pass by Value<br>";
            echo "ค่าของ \$num ก่อนเรียกฟังก์ชัน Test มีค่า = $num <br>";
            TestValue( $num );
            echo "ค่าของ \$num หลังเรียกฟังก์ชัน Test มีค่า = $num <br>";
        }
        else {
            echo "การเรียกใช้ฟังก์ชันแบบ Pass by Reference<br>";
            echo "ค่าของ \$num ก่อนเรียกฟังก์ชัน Test มีค่า = $num <br>";
            TestReference( $num );
            echo "ค่าของ \$num หลังเรียกฟังก์ชัน Test มีค่า = $num <br>";
        }
    }
    else {
        show_form();
    }
    page_footer("Thank You.");
?>