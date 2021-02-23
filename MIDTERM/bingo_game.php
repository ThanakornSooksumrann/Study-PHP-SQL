<?php
    echo '<html lang="en"><head><meta charset="UTF-8">';
    echo '<title>BingoGame</title></head>';
    echo '<body align="center">';
    $arrayTable = array();
    $count = 0;
    echo '<form action="bingo_game.php" method="post">';
    echo '<table align="center" border="1" width="50%">';
    echo '<caption>BINGO GAME</caption>';
    for ($row = 0;$row < 5;$row++) {
        echo '<tr>';
        for ($col = 0;$col < 5;$col++) {
            $arrayTable[$count] = rand(0,99);
            echo '<td align="center">'.$arrayTable[$count].'</td>';
            $count++;
        }
        echo '</tr>';
    }
    echo '</table>';    
    echo '<br><input type="submit" name="submit" value="START GAME">';
    echo '</form>';
    if(isset($_POST['submit'])){
        checkNum($arrayTable);
    }
    echo '</body>';
    echo '</html>';
    function checkNum($array){
        echo '<center><div style="width: 400px; text-align: left;">';
        $count = 0;
        $win = 0;
        do{
            $count++;
            $bool = false;
            $rand = rand(0,99);
            for ($i = 0;$i < count($array);$i++){
                if($array[$i] == $rand){
                    $bool = true;
                    $win++;
                    break;
                }
            }
            if($bool == true){
                echo 'ครั้งที่ ',$count,' = '.$rand.' => <font color="green">ยินดีด้วย คุณมีเลขนี้</font><br>';
            }
            else {
                echo 'ครั้งที่ ',$count,' = '.$rand.' => เสียใจด้วย คุณไม่มีเลขนี้<br>';
            }
        }while($win != 5);
        echo '</div></center>';
        echo '<font color="red">คุณ จบ BINGO เกมนี้ ใน ครั้งที่ '.$count.'</font>';
    }
?>