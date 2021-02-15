<?php
    $number = $_POST['number'];
    $money = $_POST['money'];
    $ran = rand(0, 99);
    if($ran != $number) {
        echo '<form action="Lottery.php" method="POST">';
        echo 'เสียใจด้วยคุณไม่ถูกรางวัล<br>';
        echo '<input type="submit" value="Back"><br><br>';
        echo 'รางวัล เลขที่ออก คือ:'.$ran;
        echo '</form>';
    }
    else {
        echo '<form action="Lottery.php" method="POST">';
        echo 'ยินดีด้วยคุณถูกรางวัล<br><br>';
        echo 'คุณได้เงินรางวัล ';
        echo $money*60;
        echo ' บาท<br>';
        echo '<input type="submit" value="Back"><br><br>';
        echo 'รางวัล เลขที่ออก คือ:'.$ran;
        echo '</form>';
    }
?>