<!--ชื่อไฟล์ : Exam11-02.php -->
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check Connection
if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
}
$sql = "SELECT * FROM book";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Menu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>แสดงข้อมูลหนังสือ</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">BookName</td>
                    <td width="25%">ราคา (บาท) </td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['BookID']; ?></td>
                        <td class="name">
                            <?php echo $row['BookName']; ?>
                        </td>
                        <td><?php echo $row['UnitPrice']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>

</html>