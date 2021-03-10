<?php
    $a = array ("Beer", "Bom", "Wat");
    $b = array (22, 23, 24);
    $c = array_merge($a, $b);
    $d = array_merge($a, $b, $c);
    foreach($d as $value){
        echo $value,"<br>";
    }
?>