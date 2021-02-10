<?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message) {
        echo '<hr />' . $message ;
        echo '</body></html>';
    }
    // declare function summation
    function summation($start, $stop) {
        $total = 0;
        for($n = $start; $n <= $stop; $n++) {
            $total += $n;
        }
        return( $total);
    }

    function show_form() {
        echo '<form method="get" action="Lab8_5.php">';
        echo '<table border="1" align="center" width="400">';
        echo '<tr><td colspan="2" align="center"><strong> Summation </strong></td></tr>';
        echo '<tr><td> Start value: </td><td>';
        echo '<input type="text" name="num1" size="10" value=""/></td></tr>';
        echo '<tr><td> End value : </td><td>';
        echo '<input type="text" name="num2" size="10" value=""/></td></tr>';
        echo ' <tr><td colspan="2" align="center"><input type="submit" value=" OK " />';
        echo '<input type="reset" value=" Clear " /></td></tr></table></form> ';
    }

    // main program
    page_header("My Web Page", "EEDDFF");
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $n1 = intval($_GET['num1']);
        $n2 = intval($_GET['num2']);
        $result = summation( $n1, $n2 );
        show_form();
        echo '<hr>';
        echo "<center><h3>Summation of " . $n1 . " - " . $n2 . " = " . $result . "</h3></center>";
    }
    else {
        show_form();
    }
    page_footer("Thank You.");
?>