<html>
    <head><title>Update Book</title></head>
    <body>
        <?php 
            $hostname = "localhost";
            $username = "root";
            $password = "12345";
            $dbname = "bookit";
            $conn = mysqli_connect( $hostname, $username, $password, $dbname);
            mysqli_set_charset($conn, "utf8");

            $id = $_GET['id'];
            $sql = "SELECT * FROM book WHERE BookID = $id";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_array($result);

        ?>

        <form enctype="multipart/form-data" name="save" method="POST" action="savebookupdate.php">
            <?php 
                echo "<table border=1 align=center bgcolor=#FFCCCC";
                echo "<tr><td align=center colspan=2 bgcolor=#FF99CC><B> แก้ไข รายละเอียดหนังสือ</B></td></tr>";

                echo '<tr><td> รหัสหนังสือ : </td><td><input type="text" name="BookID" value="'.$data["BookID"].'" readonly</td></tr>';
                echo '<tr><td> ชื่อหนังสือ : </td><td><input type="text" name="BookName" value="'.$data["BookName"].'" readonly</td></tr>';
                echo '<tr><td> สำนักพิมพ์ : </td><td><input type="text" name="Publish" value="'.$data["Publish"].'" readonly</td></tr>';
                echo '<tr><td> ราคาซื้อ : </td><td><input type="text" name="UnitPrice" value="'.$data["UnitPrice"].'" readonly</td></tr>';
                echo '<tr><td> ราคาเช่า : </td><td><input type="text" name="UnitRent" value="'.$data["UnitRent"].'" readonly</td></tr>';
                echo "</table>";
            ?>
            <br>
            <div align="center">
                <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
                <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
            </div>
        </form>
        <div align="center"><a href="listofbook2.php">กลับหน้าหลัก</a></div><br>
    </body>
</html>