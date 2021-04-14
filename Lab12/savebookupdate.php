<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "bookit";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    $BookID=$_POST['BookID'];
    $BookName=$_POST['BookName'];
    $Publish=$_POST['Publish'];
    $UnitPrice=$_POST['UnitPrice'];
    $UnitRent=$_POST['UnitRent'];

    if(isset($BookID))
    {
        $BDate = date("Y-m-d");

        $sqltxt = mysqli_query($conn, "UPDATE Book
        SET BookName = '$BookName', Publish = '$Publish',
            UnitPrice = '$UnitPrice', UnitRent = '$UnitRent'
        WHERE BookID = '$BookID' ") or die (mysqli_error($conn));

        echo "<br><br><center><h2>แก้ไขข้อมูลเรียบร้อย</h2><br><br></center>";
        echo "<center><a href='listofbook2.php'>แสดงข้อมูลทั้งหมด</a></center>";
    }
    mysqli_close($conn);
?>