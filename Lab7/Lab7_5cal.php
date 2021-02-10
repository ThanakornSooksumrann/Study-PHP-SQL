<html>
    <head><title>แสดงการใช้ฟังก์ชันคณิตศาสตร์ </title>
    </head>
    <body>
        <?php
        echo "<h3>";
        if ( isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['angle']) ) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $angle = $_GET['angle'] ;

            echo "<table align='center' border='2' width='550'>";
            echo "<tr><td align='center'> ค าสั่ง </td>";
            echo "<td align='center'> \$number1 = $number1</td>";
            echo "<td align='center'> \$number2 = $number2</td></tr>";
            echo "<tr><td align='center'> abs( ) </td>";
            echo "<td align='center'>" . abs($number1) . "</td>";
            echo "<td>" . abs($number2) . "</td></tr>";
            echo "<tr><td align='center'> ceil( ) </td>";
            echo "<td align='center'>" . ceil($number1) . "</td>";
            echo "<td>" . ceil($number2) . "</td></tr>";
            echo "<tr><td align='center'> floor( ) </td>";
            echo "<td align='center'>" . floor($number1) . "</td>";
            echo "<td>" . floor($number2) . "</td></tr>";
            echo "<tr><td align='center'> sqrt( ) </td>";
            echo "<td align='center'>" . sqrt( abs ($number1) ) . "</td>";
            echo "<td>" . sqrt( abs( $number2 ) ) . "</td></tr>";
            echo "<tr><td align='center'> pow( ) </td>";
            echo "<td align='center'>" . pow($number1, 2) . "</td>";
            echo "<td>" . pow($number2, 2) . "</td></tr>";
            echo "<tr><td align='center'> log10( ) </td>";
            echo "<td align='center'>" . log10($number1) . "</td>";
            echo "<td>" . log10($number2) . "</td></tr>";
            echo "<tr><td align='center'> exp( ) </td>";
            echo "<td align='center'>" . exp($number1) . "</td>";
            echo "<td>" . exp($number2) . "</td></tr>";
            echo "<tr><td align='center'> rand( ) </td>";
            echo "<td align='center'>" . rand(1, $number1) . "</td>";
            echo "<td>" . rand(1, $number2) . "</td></tr>";
            echo "<tr><td align='center'> min( ) </td>";
            echo "<td align='center'>" . min($number1,$number2) . "</td>";
            echo "<td>" . min($number1,$number2) . "</td></tr>";
            echo "<tr><td align='center'> max( ) </td>";
            echo "<td align='center'>" . max($number1,$number2) . "</td>";
            echo "<td>" . max($number1,$number2) . "</td></tr>";
            $rad = deg2rad($angle);
            echo "</table><br>";
            echo "<table align='center' width='50%' border='2'>";
            echo "<tr><td> $angle degree = $rad radius . ";
            echo "<tr><td>sin( $angle ) = " . sin($rad) . "</td></tr>";
            echo "<tr><td>cos( $angle ) = " . cos($rad) . "</td></tr>";
            echo "<tr><td>tan( $angle ) = " . tan($rad) . "</td></tr>";
            echo "</table>";
        }
        else {
            echo "ไม่ได้ประกาศตัวแปร data ";
        }
        ?>
    </body>
</html>