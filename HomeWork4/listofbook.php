<!DOCTYPE html>
<html>

<head>
    <title>Update Table Book</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "bookit";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");

    mysqli_set_charset($conn, "utf8");

    $sqltxt = mysqli_query($conn, "SELECT * FROM book order by BookID")
        or die(mysqli_error($conn));

    echo "<CENTER><H1>User:".$_SESSION["name"]."</H1></CENTER>";
    echo "<CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
    echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
    echo "align = \"center\" valign = \"top\" >";
    echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
    echo "<td width =\"30\" align=\"center\">ลำดับ</font></td>";
    echo "<td width =\"100\" align=\"center\" >รหัสหนังสือ</td>";
    echo "<td align=\"center\" width = \"200\">ชื่อหนังสือ</td>";
    $a = 1;
    while ($rs = mysqli_fetch_array($sqltxt)) {
        echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
        echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
        echo "<td align=\"center\"> ";
        echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
        echo "<td align=\"center\">$rs[1]</td>";
        $a++;
    }
    ?>
    </tr>
    </table><BR><BR>
    <div align="center"> <A HREF="logout.php">ออกจากระบบ</A></div><BR>
    <?php
    mysqli_close($conn);
    ?>