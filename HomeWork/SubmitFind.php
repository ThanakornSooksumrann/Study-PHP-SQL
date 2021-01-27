<?php
    $num1 = $_POST['Num1'];
    $num2 = $_POST['Num2'];
    $num3 = $_POST['Num3'];
    $op = $_POST['operator'];
    if($op == "mi"){
        echo ("Mimimum number = ".max($num1,$num2,$num3));
    }
    elseif($op == "ma"){
        echo ("Maximum number = ".min($num1,$num2,$num3));
    }
    elseif($op == "av"){
        echo ("Average number = ".(($num1+$num2+$num3)/3));
    }
?>