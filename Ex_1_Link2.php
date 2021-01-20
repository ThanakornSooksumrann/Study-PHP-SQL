<html>
    <body>
        <?php
            $o = $_GET["op"];
            $x = $_GET["x"];
            $y = $_GET["y"];
            switch($o){
                case("+") : plus(); break;
                case("-") : sub(); break;
                case("*") : mul(); break;
                case("/") : div(); break;
            }
            function plus()
            {
                global $x, $y;

                echo "x + y = ",$x+$y;
                echo "<br/>";
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
                    echo "<br/>";
        ?>
    </body>
</html>