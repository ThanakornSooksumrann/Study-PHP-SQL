<?php
$nameDB = $_POST['nameDB'];
$servername = "localhost";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect(
    $servername,
    $username,
    $password
);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
if (isset($_POST['cr'])) {
    $sql = "CREATE DATABASE $nameDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {// Drop database
    $sql = "DROP DATABASE $nameDB";
    if (mysqli_query($conn, $sql)) {
        echo "Drop created successfully";
    } else {
        echo "Error drop database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
echo '<br><a href="FormDB.php"><button>กลับไปหน้าแรก</button></a>';
?>