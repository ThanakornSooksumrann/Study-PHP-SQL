<?php
    $x = 100;
    $y = 10;
    $operator = "+" ;
    function plus()
    {
        global $x, $y;

        echo "x + y = ",$x+$y ,"<br/>";
        //echo "<br/>";
    }
    function sub()
    {
        global $x, $y;
        echo "x - y = ",$x-$y ;
        echo "<br/>";
    }
    function mul()
    {
        global $x, $y;
        echo "x * y = ",$x*$y ;
        echo "<br/>";
    }
    function div()
    {
        global $x, $y;
        echo "x / y = ",$x/$y ;
        echo "<br/>";
    }
    switch($operator){
        case("+") : plus(); break;
        case("-") : sub(); break;
        case("*") : mul(); break;
        case("/") : div(); break;
    }
    
?>