<?php
    // declare function page_header
    function page_header() {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>ยินดีต้อนรับทุกท่าน (8-2) </title></head>';
        echo '<body bgcolor="#ffffff">';
    }

    // main program
    $user = "Thanakorn";
    page_header();
    echo "<br>สวัสดีคุณ $user <br><br>";
    page_footer();

    // declare function page_footer
    function page_footer() {
        echo '<hr>ขอบคุณที่มาเยี่ยมชม';
        echo '</body></html>';
    }
?>