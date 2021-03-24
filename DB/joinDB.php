<?php
    echo '<link rel="stylesheet" href="style.css">';
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "itbook";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn,'utf8');
    $sql = "SELECT Book.bookid, Book.bookname, typebook.typename From Book INNER JOIN typebook ON Book.typeid = typebook.typeid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<center>';
        // output data of each row
        echo '<div class="container">';
        echo '<h1>แสดงข้อมูลหนังสือ</h1>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>';
        echo "book id";
        echo '</th>';
        echo '<th>';
        echo "book_name";
        echo '</th>';
        echo '<th>';
        echo "type_name";
        echo '</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>';
            echo $row["bookid"];
            echo '</td>';
            echo '<td>';
            echo $row["bookname"];
            echo '</td>';
            echo '<td>';
            echo $row["typename"];
            echo '</td>';
            echo '</tr>';
        }
        echo '<tbody>';
        echo '</table>';
        echo '</center>';
        echo '<div>';
    } else {
        echo "0 results";
    }
    $conn->close();
?>