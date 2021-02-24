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
$score2 = array(0,0,0,0,0,0,0,0);
$score3 = array('A', 'B+', 'B', 'C+', 'C', 'D+', 'D', 'F');
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
    $score2[0]++;
    echo "A";
}
elseif ($score[$n] >= 75) {
    $score2[1]++;
    echo "B+";
}
elseif ($score[$n] >= 70) {
    $score2[2]++;
    echo "B";
}
elseif ($score[$n] >= 65) {
    $score2[3]++;
    echo "C+";
}
elseif ($score[$n] >= 60) {
    $score2[4]++;
    echo "C";
}
elseif ($score[$n] >= 55) {
    $score2[5]++;
    echo "D+";
}
elseif ($score[$n] >= 50) {
    $score2[6]++;
    echo "D";
}
elseif ($score[$n] <= 49) {
    $score2[7]++;
    echo "F";
}
echo '</td>';
echo '</tr>';
}
echo '<tr><td colspan="3" align="center"> Average Score : ';
echo average( $score, $MaxStudent);
echo '</td></tr>';
echo '</table>';
echo '<center>';
echo '<table border="1" align="center" width="23%">';
echo '<tr>';
echo '<td>Grade</td>';
echo '<td>total</td>';
echo '</tr>';
for($i = 0;$i <= 7;$i++){
    echo '<tr>';
    echo '<td>',$score3[$i],'</td>';
    echo '<td>',$score2[$i],'</td>';
    echo '</tr>';
}
echo '</table>';
echo 'Max:',max($score),'คนที่:',ma($score);
echo '<br>';
echo 'Min:',min($score),'คนที่:',mi($score);
echo '</center>';
}
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
        $total += $data[$n];
    }
    return( $total / $max );
}

    function ma($score){
        for($i = 0;$i < count($score);$i++){
            if($score[$i] == max($score)){
                echo $i+1;
            }
        }
    }

    function mi($score){
        for($i = 0;$i < count($score);$i++){
            if($score[$i] == min($score)){
                echo $i+1;
            }
        }
    }
    ?>
</body>

</html>