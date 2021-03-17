<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = $_POST['nameDB'];
$nameTB = $_POST['nameTB'];
$nameF = $_POST['nameF'];
$nameL = $_POST['nameL'];
$nameE = $_POST['nameE'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO $nameTB (firstname, lastname, email)
VALUES ('$nameF', '$nameL', '$nameE');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo '<br><a href="FormInsert.php"><button>กลับไปหน้าแรก</button></a>';
?>