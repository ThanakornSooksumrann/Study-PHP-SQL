<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW4</title>
    <style>
        body {
            margin: 50px;
            padding: 20px;
        }
        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
    <?php
        $gra1 = $_POST['grade1'];
        $gra2 = $_POST['grade2'];
        $gra3 = $_POST['grade3'];
        $gra4 = $_POST['grade4'];
        $gra5 = $_POST['grade5'];
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];
        $unit1 = $_POST['unit1'];
        $unit2 = $_POST['unit2'];
        $unit3 = $_POST['unit3'];
        $unit4 = $_POST['unit4'];
        $unit5 = $_POST['unit5'];
        if ($_POST['Back'] == "back") {
            $gra1 = "-";
            $gra2 = "-";
            $gra3 = "-";
            $gra4 = "-";
            $gra5 = "-";
        }
        function str($sub) {
            if ($sub == "") {
                $total = "-";
            }
            else return $sub;
            return $total;
        }
        $sub1 = str($sub1);
        $sub2 = str($sub2);
        $sub3 = str($sub3);
        $sub4 = str($sub4);
        $sub5 = str($sub5);
        function grade($gra) {
            if ($gra == "A") {
                $total = 4;
            }
            elseif ($gra == "B+") {
                $total = 3.5;
            }
            elseif ($gra == "B") {
                $total = 3;
            }
            elseif ($gra == "C+") {
                $total = 2.5;
            }
            elseif ($gra == "C") {
                $total = 2;
            }
            elseif ($gra == "D+") {
                $total = 1.5;
            }
            elseif ($gra == "D") {
                $total = 1;
            }
            elseif ($gra == "F") {
                $total = 0;
            }
            else {
                $total = 0;
            }
            return ($total);
        }
        $gra11 = grade($gra1);
        $gra22 = grade($gra2);
        $gra33 = grade($gra3);
        $gra44 = grade($gra4);
        $gra55 = grade($gra5);
        if ($gra11 || $gra22 || $gra33 || $gra44 || $gra55 != 0) {
            $avg = ($gra11*$unit1)+($gra22*$unit2)+($gra33*$unit3)+($gra44*$unit4)+($gra55*$unit5);
            $sum = $avg/($unit1+$unit2+$unit3+$unit4+$unit5);
        }
        else $sum = 0;
        if ($sum >= 4) {
            $total = "A";
        }
        elseif ($sum >= 3.5) {
            $total = "B+";
        }
        elseif ($sum >= 3) {
            $total = "B";
        }
        elseif ($sum >= 2.5) {
            $total = "C+";
        }
        elseif ($sum >= 2) {
            $total = "C";
        }
        elseif ($sum >= 1.5) {
            $total = "D+";
        }
        elseif ($sum >= 1) {
            $total = "D";
        }
        elseif ($sum < 1) {
            $total = "F";
        }
    ?>
    <?php if (isset($_POST['submit']) && $unit1 || $unit2 || $unit3 || $unit4 || $unit5 != 0) { ?>
    <center>
    <font face="RSU">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" cellspacing="1" bgcolor="#00000000">
        <thead>
        <tr bgcolor="#cccccccc">
            <th>วิชา</th>
            <th>หน่วยกิต</th>
            <th>เกรด</th>
        </tr>
        </thead>
        <tbody>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $sub1; ?></td>
            <td align="center"><?php echo $unit1; ?></td>
            <td align="center"><?php echo ($gra11."(".$gra1.")"); ?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $sub2; ?></td>
            <td align="center"><?php echo $unit2; ?></td>
            <td align="center"><?php echo ($gra22."(".$gra2.")"); ?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $sub3; ?></td>
            <td align="center"><?php echo $unit3; ?></td>
            <td align="center"><?php echo ($gra33."(".$gra3.")"); ?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $sub4; ?></td>
            <td align="center"><?php echo $unit4; ?></td>
            <td align="center"><?php echo ($gra44."(".$gra4.")"); ?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $sub5; ?></td>
            <td align="center"><?php echo $unit5; ?></td>
            <td align="center"><?php echo ($gra55."(".$gra5.")"); ?></td>
        </tr>
        </tbody>
        <tfoot bgcolor="#8AE634">
        <tr>
            <td align="center" colspan="2"><?php echo ("Grade:".number_format($sum,2)); ?></td>
            <td align="center"><?php echo $total; ?></td>
        </tr>
        </tfoot>
    </table>
    <input name="back" type="submit" class="button2" value="ย้อนกลับ">
    </font>
    </center>
    </form>
    <?php } else { ?>
    <font face="RSU">
        <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table bordercolor="black">
                    <caption><font size="60px">คำนวณเกรด</font></caption>
                    <tr>
                        <th>วิชา</th>
                        <th>หน่วยกิต</th>
                        <th>เกรด</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="sub1" style="width: 90%;" placeholder="ชื่อวิชา"></td>
                        <td><select name="unit1">
                            <option value="0">0</option>
                            <option>1</option>
                            <option>1.5</option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                        </select></td>
                        <td align="center"><select name="grade1">
                            <option>-</option>
                            <option>F</option>
                            <option>A</option>
                            <option>B+</option>
                            <option>B</option>
                            <option>C+</option>
                            <option>C</option>
                            <option>D+</option>
                            <option>D</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="sub2" style="width: 90%;" placeholder="ชื่อวิชา"></td>
                        <td><select name="unit2">
                            <option value="0">0</option>
                            <option>1</option>
                            <option>1.5</option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                        </select></td>
                        <td align="center"><select name="grade2">
                            <option>-</option>
                            <option>F</option>
                            <option>A</option>
                            <option>B+</option>
                            <option>B</option>
                            <option>C+</option>
                            <option>C</option>
                            <option>D+</option>
                            <option>D</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="sub3" style="width: 90%;" placeholder="ชื่อวิชา"></td>
                        <td><select name="unit3">
                            <option value="0">0</option>
                            <option>1</option>
                            <option>1.5</option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                        </select></td>
                        <td align="center"><select name="grade3">
                            <option>-</option>
                            <option>F</option>
                            <option>A</option>
                            <option>B+</option>
                            <option>B</option>
                            <option>C+</option>
                            <option>C</option>
                            <option>D+</option>
                            <option>D</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="sub4" style="width: 90%;" placeholder="ชื่อวิชา"></td>
                        <td><select name="unit4">
                            <option value="0">0</option>
                            <option>1</option>
                            <option>1.5</option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                        </select></td>
                        <td align="center"><select name="grade4">
                            <option>-</option>
                            <option>F</option>
                            <option>A</option>
                            <option>B+</option>
                            <option>B</option>
                            <option>C+</option>
                            <option>C</option>
                            <option>D+</option>
                            <option>D</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="sub5" style="width: 90%;" placeholder="ชื่อวิชา"></td>
                        <td><select name="unit5">
                            <option value="0">0</option>
                            <option>1</option>
                            <option>1.5</option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                        </select></td>
                        <td align="center"><select name="grade5">
                            <option>-</option>
                            <option>F</option>
                            <option>A</option>
                            <option>B+</option>
                            <option>B</option>
                            <option>C+</option>
                            <option>C</option>
                            <option>D+</option>
                            <option>D</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input name="submit" type="submit" class="button2" value="ส่งค่า">
                        <button type="reset" class="button2">ลบทั้งหมด</button></td>
                    </tr>
                </table>
            </form>
        </center>
    </font>
    <?php } ?>
</body>
</html>