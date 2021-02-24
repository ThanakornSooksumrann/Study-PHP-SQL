<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
</head>

<body>
    <center>
    <form action="Lab9_2.php" method="POST">
        <label>จำนวนนักเรียน:</label>
        <input type="number" name="stu" required>
        <input type="submit" name="sub" value="submit">
    </form>
    </center>
    <?php
$MaxStudent = $_POST['stu'];
$score = array();
for($n = 0 ; $n < $MaxStudent; $n++) {
$score[$n] = rand(0, 100);
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
if(isset($_POST['sub'])){
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td><td align="center" width="90">Grade</td><</tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
echo '<td align="center" width="90">' . ($n+1 ) . '</td>';
echo '<td align="center" width="90">' . $score[$n] . '</td><td>'; 
if ($score[$n] >= 80) {
    echo "A";
}
elseif ($score[$n] >= 75) {
    echo "B+";
}
elseif ($score[$n] >= 70) {
    echo "B";
}
elseif ($score[$n] >= 65) {
    echo "C+";
}
elseif ($score[$n] >= 60) {
    echo "C";
}
elseif ($score[$n] >= 55) {
    echo "D+";
}
elseif ($score[$n] >= 50) {
    echo "D";
}
elseif ($score[$n] <= 49) {
    echo "F";
}
echo '</td>';
echo '</tr>';
}
echo '<tr><td colspan="2" align="center"> Average Score : ';
echo average( $score, $MaxStudent);
echo '</td></tr>';
echo '</table>';
echo '<center>';
echo 'Max:',max($score);
echo '<br>';
echo 'Min:',min($score);
echo '</center>';
}
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
        $total += $data[$n];
    }
    return( $total / $max );
}
    ?>
</body>

</html>