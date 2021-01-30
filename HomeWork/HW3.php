<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3</title>
    <style>
        body {
            margin: 80px;
            padding: 20px;
        }
        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
    <?php
        $fin = $_POST['Final'];
        $mid = $_POST['Midterm'];
        $ass = $_POST['Assignment'];
        $hom = $_POST['Homework'];
        $total = $fin+$mid+$ass+$hom;
        if ($_POST['Back'] == "back") {
            $fin = "";
            $mid = "";
            $ass = "";
            $hom = "";
        }
        if (isset($_POST['submit']) && $total >= 80) {
            $grade = "A";
        }
        elseif ($total >= 75) {
            $grade = "B+";
        }
        elseif ($total >= 70) {
            $grade = "B";
        }
        elseif ($total >= 65) {
            $grade = "C+";
        }
        elseif ($total >= 60) {
            $grade = "C";
        }
        elseif ($total >= 55) {
            $grade = "D+";
        }
        elseif ($total >= 50) {
            $grade = "D";
        }
        elseif ($total >= 49) {
            $grade = "F";
        }
    ?>
    <?php if (isset($_POST['submit']) && $fin <= 30 && $mid <= 30 && $ass <= 20 && $hom <= 20) { ?>
        <center>
            <font face="RSU">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table style="border: 3; width: 55%; height: 45%; color:black;" cellspacing="1" bgcolor="#98FB98">
                        <thead>
                        <tr bgcolor="#00000000">
                            <th colspan="2"><font size="60px" color="#ffffffff">Score Total</font></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr bgcolor="#CBFF75">
                            <td align = "left">Final</td>
                            <td><?php echo $fin; ?></td>
                        </tr>
                        <tr bgcolor="#B2FA5C">
                            <td align = "left">Midterm</td>
                            <td><?php echo $mid; ?></td>
                        </tr>
                        <tr bgcolor="#66EC66">
                            <td align = "left">Assignment</td>
                            <td><?php echo $ass; ?></td>
                        </tr>
                        <tr bgcolor="#8AE634">
                            <td align = "left">Homework</td>
                            <td><?php echo $hom; ?></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr bgcolor="#78E150">
                            <td align = "left">Total</td>
                            <td><?php echo $total; ?></td>
                        </tr>
                        <tr bgcolor="#64CD3C">
                            <td align = "left">Grade</td>
                            <td><?php echo $grade; ?></td>
                        </tr>
                        </tfoot>
                    </table>
                    <input name="back" type="submit" class="button2" value="Back">
                </form>
            </font>
        </center>
    <?php } else { ?>
        <center>
                <font face="RSU">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <table style="width: 55%; height: 45%;" bordercolor="#00000000">
                            <tr>
                                <th colspan="2"><font size="60px">Score</font></th>
                            </tr>
                            <tr>
                                <td align = "right">Final     :</td>
                                <td><input type="text" name="Final" style="width: 65%;" max="30"  required></td>
                            </tr>
                            <tr>
                                <td align = "right">Midterm   :</td>
                                <td><input type="text" name="Midterm" style="width: 65%;" max="30" required></td>
                            </tr>
                            <tr>
                                <td align = "right">Assignment:</td>
                                <td><input type="text" name="Assignment" style="width: 65%;" max="20" required></td>
                            </tr>
                            <tr>
                                <td align = "right">Homework  :</td>
                                <td><input type="text" name="Homework" style="width: 65%;" max="20" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input name="submit" type="submit" class="button2" value="Submit">
                                <button type="reset" class="button2">clear</button></td>
                            </tr>
                        </table>
                    </form>
                </font>
        </center>
        <?php } ?>
</body>
</html>