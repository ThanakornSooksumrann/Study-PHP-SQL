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
    function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2, $start, $end) {
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">' ;
        $total = 0;
        $count = 0;
        for($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
                $count++;
                if ( $r % 2 == 1) {
                    echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
                }
                else {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                }
                $ran = rand($start, $end);
                if ($count == 1) {
                    $min = $ran;
                    $max = $ran;
                }
                $total += $ran;
                $min = min_num($min, $ran);
                $max = max_num($max, $ran);
                echo $ran.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $total = average_num($total, $maxRow*$maxCol);
        echo '<center>';
        echo "Average:".$total.'<br>';
        echo "Min:".$min.'<br>';
        echo "Max:".$max.'<br>';
        echo '</center>';
        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
        echo "<p align='center'> $message </p>";
    }

    function min_num($min, $ran){
        if ($min > $ran) {
            return $ran;
        }
        return $min;
    }
    function max_num($max, $ran){
        if ($max > $ran) {
            return $max;
        }
        return $ran;
    }
    function average_num($num, $num2){
        $total = $num/$num2;
        return $total;
    }
    $row = $_POST['row'];
    $col = $_POST['col'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $array = array();
    page_header("Example 8-4", "FFDDEE");
    echo '<center>';
    echo '<form action="Lab8_4.php" method="post">';
    echo '<label>Row:</label>';
    echo '<input type="number" name="row" required><br>';
    echo '<label>Column:</label>';
    echo '<input type="number" name="col" required><br>';
    echo '<label>Start Num:</label>';
    echo '<input type="number" name="start" required><br>';
    echo '<label>End Num:</label>';
    echo '<input type="number" name="end" required><br>';
    echo '<input type="submit" value="submit" name="submit"><br>';
    echo '</form>';
    echo '</center>';
    if(isset($_POST['submit'])){
        show_checker($row, $col,"33ff99","ffff99", $start,$end);
    }
    page_footer("Thank You.");
?>