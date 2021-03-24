<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "earth";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // sql to delete a record
    $sql = "DELETE FROM biw WHERE id=3";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
?>