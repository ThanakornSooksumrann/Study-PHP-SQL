<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-1 </title>
</head>

<body>
    <?php
    $weekdays = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
    echo '<center><font size="4" color="blue">มีนาคม ๒๕๖๐</font>';
    echo '<font size="5" color="red"> ๓ </font>';
    echo '<font size="4" color="blue">March 2017</font></center>';
    echo '<table border="1" align="center">';
    echo '<tr>';
    for ($n = 0; $n < 7; $n++) {
        echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
    }
    print_month();
    echo '</tr></table>';
    function print_month()
    {
        $day = -2;
        for ($row = 1; $row <= 5; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
        }
    }
    ?>
</body>

</html>