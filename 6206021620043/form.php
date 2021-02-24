<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="cal.php" method="POST">
            <label>รูปผลไม้</label><br>
            <label>เลือกรูป:</label>
            <select name="fruit">
                <option value="1">ทับทิม</option>
                <option value="2">กล้วย</option>
                <option value="3">ส้ม</option>
            </select>
            <label>ขนาดรูป 100 - 500px :</label>
            <input type="number" name="wid" max="500" min="100" required><br>
            กิโลผลไม้<br>
            ทับทิมโลละ 100 บาท<br>
            กล้วยโลละ 200 บาท<br>
            ส้มโลละ 300 บาท<br>
            <input type="radio" id="k1" name="kg" value="1">
            <label for="k1">1 kg</label><br>
            <input type="radio" id="k2" name="kg" value="2">
            <label for="k2">2 kg</label><br>
            <input type="radio" id="k3" name="kg" value="3">
            <label for="k3">3 kg</label><br>
            <input type="submit" name="sub">
        </form>
    </center>
</body>
</html>