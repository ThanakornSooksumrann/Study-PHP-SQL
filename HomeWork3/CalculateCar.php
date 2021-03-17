<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="myStyle.css">
    <?php session_start(); ?>
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['sub'])) {
        $_SESSION['carName'] = $_POST['car'];
    }
    $car = $_SESSION['carName'];
    function DownPayment($percen, $price)
    {
        return ($price * $percen) / 100;
    }
    function  installment($price, $down)
    {
        return $price - $down;
    }
    function interestYear($installment, $year)
    {
        return ($installment * $year) / 100;
    }
    function  interestTotal($interestYear, $time)
    {
        return $interestYear * ($time / 12);
    }
    function payMonth($installment, $interestTotal, $time)
    {
        return ($installment + $interestTotal) / $time;
    }
    ?>
    <div class="le">
        <center>
            <?php if ($car == "Accord") : ?>
                <?php $price = 1799000;
                $year = 2; ?>
                <img src="Pic/logo-accord.png"><br>
                <img src="Pic/Accord.png">
            <?php elseif ($car == "Civic") : ?>
                <?php $price = 1145000;
                $year = 2; ?>
                <img src="Pic/logo-civic.png"><br>
                <img src="Pic/Civic.png">
            <?php elseif ($car == "Jazz") : ?>
                <?php $price = 754000;
                $year = 4; ?>
                <img src="Pic/logo-jazz.png" ><br>
                <img src="Pic/Jazz.png">
            <?php elseif ($car == "City") : ?>
                <?php $price = 749000;
                $year = 4; ?>
                <img src="Pic/logo-city.png"><br>
                <img src="Pic/City.png">
            <?php endif ?>
        </center>
    </div>
    <div class="ri">
        <form action="CalculateCar.php" method="POST">
            <fieldset>
                <legend>เลือกเงินดาวน์</legend>
                เงินดาวน์
                <input type="radio" name="type" onclick="typeinput(1)" required>
                <select name="percen" id="percen" disabled>
                    <option value="15">15%</option>
                    <option value="20">20%</option>
                    <option value="25">25%</option>
                    <option value="30">30%</option>
                </select>
                หรือ ระบุจำนวนเงิน
                <input type="radio" name="type" onclick="typeinput(2)"><br>
                <input type="number" name="money" id="money" required disabled>
            </fieldset>
            <br>
            <fieldset>
                <legend>เลือกระยะเวลาการผ่อนชำระ</legend>
                ระยะเวลา
                <select name="ins">
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                    <option value="72">72</option>
                </select>
                งวด
            </fieldset><br>
            <center><input type="submit" name="cal" value="Calculate"></center><br>
        </form>

        <?php if (isset($_POST['cal'])) { ?>
            <center>
                <table border="1">
                    <tr align="center">
                        <td colspan="2">รายงานการคำนวณสินเชื่อผ่อนชำระ</td>
                    </tr>
                    <tr>
                        <td>รุ่นรถยนต์:</td>
                        <td><?php echo $car; ?></td>
                    </tr>
                    <tr>
                        <td>ราคารถยนต์:</td>
                        <td><?php echo number_format($price); ?></td>
                    </tr>
                    <tr>
                        <td>(1) เงินดาวน์:</td>
                        <td>
                            <?php
                            if (isset($_POST['percen'])) {
                                $down = DownPayment($_POST['percen'], $price);
                                echo number_format($down);
                            } else {
                                $down = $_POST['money'];
                                echo number_format($down);
                            } ?>
                            บาท
                            <?php if (isset($_POST['percen'])) {
                                echo "(" . $_POST['percen'] . "%)";
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>(2) จำนวนเงินที่ขอสินเชื่อ:</td>
                        <td>
                            <?php $installment = installment($price, $down);
                            echo number_format($installment);
                            ?> บาท
                        </td>
                    </tr>
                    <tr>
                        <td>(3) ดอกเบี้ย ต่อปี:</td>
                        <td>
                            <?php
                            $interestYear = interestYear($installment, $year);
                            echo number_format($interestYear) . " บาท (" . $year . "%ต่อปี)";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>(4) ดอกเบี้ย ทั้งหมด <?php echo $_POST['ins'] / 12; ?>ปี (<?php echo $_POST['ins'] ?> งวด) :</td>
                        <td>
                            <?php $interestTotal = interestTotal($interestYear, $_POST['ins']);
                            echo number_format($interestTotal);
                            ?> บาท
                        </td>
                    </tr>
                    <tr>
                        <td>(5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด:</td>
                        <td><?php
                            $payMonth = payMonth($installment, $interestTotal, $_POST['ins']);
                            echo number_format($payMonth);
                            ?> บาท
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><a href="index.php"><button>กลับไปหน้าแรก</button></a></td>
                    </tr>
                </table>
            </center>
        <?php } ?>
    </div>

    <script>
        function typeinput(type) {
            let elePercen = document.getElementById("percen");
            let elemoney = document.getElementById("money");
            if (type == 1) {
                elePercen.removeAttribute("disabled");
                elemoney.setAttribute("disabled", "");
            } else {
                elemoney.removeAttribute("disabled");
                elePercen.setAttribute("disabled", "");
            }
        }
    </script>
</body>

</html>