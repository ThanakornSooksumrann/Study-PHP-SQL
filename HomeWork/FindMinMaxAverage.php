<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1 align="center">HW1:Find Min Max Average</h1>
        <form name="frmMain" method="post" action="SubmitFind.php" target="iframe_target">
        <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
            <center>
                <label for="Num1">Num1:</label>
                <input type="number" name="Num1"><br><br>
                <label for="Num2">Num2:</label>
                <input type="number" name="Num2"><br><br>
                <label for="Num3">Num3:</label>
                <input type="number" name="Num3"><br><b>
                <input type="radio" name="operator" value="mi"> Minimum <br>
                <input type="radio" name="operator" value="ma"> Maximum <br>
                <input type="radio" name="operator" value="av"> Average <br><br>
                <input name="btnSubmit" type="submit" value="Submit">
            </center>
        </form>
    </body>
</html>