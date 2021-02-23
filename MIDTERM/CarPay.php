<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Pay</title>
</head>
<body>
    <center>
        <form action="CarSell.php" method="POST">
            <table border="2px">
                <tr align="left">
                    <td>ชื่อ นามสกุล ลูกค้า :</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr align="left">
                    <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวง :</td>
                    <td><input type="text" name="per" required></td>
                </tr>
                <tr align="left">
                    <td>จำนวนงวด ที่ต้องการ :</td>
                    <td><select name="payment">
                        <option>36</option>
                        <option>48</option>
                        <option>60</option>
                        <option>72</option>
                    </select></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" name="sub" value="ซื้อรถ"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>