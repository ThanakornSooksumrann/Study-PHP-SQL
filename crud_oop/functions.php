<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','12345');
    define('DB_NAME','CRUD_OOP');

    class DB_con {
        function __construct(){
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ". mysqli_connect_error();
            }
        }

        public function insert($firstname, $lastname, $email, $phonenumber, $address){
            $result = mysqli_query($this->dbcon, "INSERT INTO tbluser(firstname, lastname, email, phonenumber, address) 
            VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$address')");
            return $result;
        }

        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser");
            return $result;
        }
    }
?>