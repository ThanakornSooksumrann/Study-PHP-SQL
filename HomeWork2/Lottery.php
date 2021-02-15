<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            color: red;
        }
    </style>
</head>
<body bgcolor="#00FFFF">  
        <center>
            <form action="Result-lottery.php" method="post">
                <p><font color="blue" size="4"><b>โปรแกรม ตรวจ เลขท้าย 2 ตัว</b></font></p>
                <p class="red">รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ X 60 เท่า)</p>
                <p class="red">เช่นถ้าซื้อ 10 บาท ถูกรางวัลรับเงิน 600 บาท</p>
                <label class="red">เลขเสี่ยงโชค [0-99]</label>
                <input type="number" name="number" placeholder="เลขเสี่ยงโชค" min="0" max="99" style="width:150px;" required> 
                <p><font color="red" size="5.5">*ซื้อได้ตั้งแต่ 10-500 เท่านั้น</font></p>
                <label class="red"><font color="red" size="5.5">จำนวนเงินที่คุณต้องการซื้อ [10-500]</font></label>
                <input type="number" name="money" placeholder="จำนวนเงิน" min="10" max="500" style="width:150px;" required><br><br>
                <input type="submit" name="sub" value="ตรวจรางวัล">
            </form>
        </center>
</body>
</html>