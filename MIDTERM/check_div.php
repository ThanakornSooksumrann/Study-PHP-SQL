<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $str = $_POST['str'];
        $end = $_POST['end'];
        $div = $_POST['div'];

        function checkNum($str, $end, $div){
            for($i = 1;$i <= $end;$i++){
                if($str % $div == 0){
                    echo $str," , ";
                }
                $str++;
            }
        }

        function countNum($str, $end, $div){
            $count = 0;
            for($i = 1;$i <= $end;$i++){
                if($str % $div == 0){
                    $count++;
                }
                $str++;
            }
            echo "จำนวนที่หารลงตัว = ",$count," ตัว";
        }

        function sumNum($str, $end, $div){
            $sum = 0;
            for($i = 1;$i <= $end;$i++){
                if($str % $div == 0){
                    $sum += $str;
                }
                $str++;
            }
            echo "ผลรวมของตัวเลขที่หารลงตัว = ",$sum;
        }
    ?>
</head>
<body>
    <center>
        <form action="check_div.php" method="POST">
            <table>
                <tr>
                    <td>ค่าเริ่มต้น:</td>
                    <td><input type="number" name="str" required></td>
                </tr>
                <tr>
                    <td>ค่าสุดท้าย:</td>
                    <td><input type="number" name="end" required></td>
                </tr>
                <tr>
                    <td>คัวเลขที่นำไปหาร:</td>
                    <td><input type="number" name="div" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="sub" value="Check Num"></td>
                </tr>
        </form>
            <?php if(isset($_POST['sub'])){ ?>
                <tr>
                    <td colspan="2"><?php echo checkNum($str, $end, $div); ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo countNum($str, $end, $div); ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo sumNum($str, $end, $div); ?></td>
                </tr>
            <?php } ?>
            </table>
    </center>
</body>
</html>