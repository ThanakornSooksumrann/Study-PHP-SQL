<?php
    // declare function page_header
    function page_header($title = "Web Page", $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title><head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }

    // declare function page_footer
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }

    // main program
    $count = 1;
    $user = "Thanakorn";

    if ($count == 1) {
        page_header("Welcome to My Web Page","ffee00");
        echo "<br>สวัสดีคุณ $user <br><br>";
        page_footer("Thank You.");
    }
    elseif ($count == 2) {
        page_header("Welcome");
        echo "<br>สวัสดีคุณ $user <br><br>";
        page_footer();
    }
    elseif ($count == 3) {
        page_header( );
        echo "<br>สวัสดีคุณ $user <br><br>";
        page_footer();
    }
?>