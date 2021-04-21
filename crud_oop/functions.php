<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','12345');
    define('DB_NAME','CRUD_OOP');

    class DB_con {

        //เช็คว่าเชื่อมต่อดาต้าเบสได้ไหม
        function __construct(){
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ". mysqli_connect_error();
            }
        }

        //เพิ่มข้อมูล
        public function insert($firstname, $lastname, $email, $phonenumber, $address){
            $result = mysqli_query($this->dbcon, "INSERT INTO tbluser(firstname, lastname, email, phonenumber, address) 
            VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$address')");
            return $result;
        }

        //แสดงข้อมูลหน้ารายการ
        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser");
            return $result;
        }

        //เรียกข้อมูลไปแสดงตรงช่องข้อมูลแก้ไข
        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser WHERE id = '$userid'");
            return $result;
        }

        //แก้ไขข้อมูล
        public function update($firstname, $lastname, $email, $phonenumber, $address, $userid){
            $result = mysqli_query($this->dbcon, "UPDATE tbluser SET
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                address = '$address'
                WHERE id = '$userid'
            ");
            return $result;
        }

        //ลบข้อมูล
        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tbluser WHERE id = '$userid'");
            return $deleterecord;
        }
    }
?>