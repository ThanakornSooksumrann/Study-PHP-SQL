<?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    // declare function checker
    function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2) {
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">' ;
        for($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
                if ( $r % 2 == 1) {
                    echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
                }
                else {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                }
                echo $r . ' , ' . $c . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
        echo "<p align='center'> $message </p>";
    }
    page_header("Example 8-4", "FFDDEE");
    show_checker(5, 5,"33ff99","ffff99");
    page_footer("Thank You.");
?>