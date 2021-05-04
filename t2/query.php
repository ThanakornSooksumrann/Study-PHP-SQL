<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','12345');
    define('DB_NAME','product');

    class query{

        public function __construct() {
            $this->con = mysqli_connect(HOST,USER,PASS,DB_NAME);
            
            mysqli_query($this->con,"SET NAMES UTF8");
            if(mysqli_connect_errno()){
                echo "Can't connect to data ".mysqli_connect_errno();
            }
        }
        public function create($p_name,$p_des,$p_amount,$p_price,$pic)
        {
            
            if(move_uploaded_file($pic['tmp_name'],'uploads/'.$pic['name'])){
                $sql = "INSERT INTO product (p_name,p_des,p_amount,p_price,p_pic) 
                VALUES ('$p_name','$p_des',$p_amount,$p_price,'".$pic['name']."')";
                $result = mysqli_query($this->con,$sql);
                return $result;
            }
        }

        // READ
        public function showData()
        {
            $sql = "SELECT * FROM product";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }

        // UPDATE
        public function loadOne($p_id)
        {
            $sql = "SELECT * FROM product WHERE p_id = '$p_id'";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }

        public function updateData($p_id,$p_name,$p_des,$p_amount,$p_price,$pic)
        {
            $sql = "";
            if(!is_array($pic)){
                $sql = "UPDATE product SET p_name='$p_name' , p_des='$p_des', p_amount=$p_amount , p_price=$p_price WHERE p_id='$p_id'";
            } else {
                if(move_uploaded_file($pic['tmp_name'],'uploads/'.$pic['name'])){
                    $sql = "UPDATE product SET p_name='$p_name' , p_des='$p_des', p_amount=$p_amount , p_price=$p_price , p_pic = '".$pic['name']."' WHERE p_id='$p_id'";
                }
            }
            $result = mysqli_query($this->con,$sql);
            return $result;
        }

        public function del($p_id)
        {
            $sql = "DELETE FROM product WHERE p_id = '$p_id'";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }

        public function login($username , $password)
        {
            // เราต้องดึงข้อมูลของ username ที่ตรงกัน
            $sql = "SELECT * FROM member WHERE username = '$username'";
            $result = mysqli_query($this->con , $sql);
            // mysqli_num_rows($result) > 0 
            if($result->num_rows > 0 ){
                $user = $result->fetch_assoc();
                // ถ้ารหัสผ่านที่อยู่ใน table ตรงกับรหัสผ่านที่ผู้ใช้กรอกเข้ามาจะให้ทำอะไรต่อ
                if($user['password'] == $password){
                        // เอาไปตรวจสอบว่ามีการเข้าสู่ระบบมาหรือยัง  // เอาไปตรวจสอบว่าผู้ใช้อยู่ระดับ
                    return array('m_id'=>$user['m_id'] , 'status'=>$user['status']);
                }
                else {
                    return 'รหัสผ่านผิด';
                }
            }
            else {
                return 'ไม่พบผู้ใช้';
            }
        }

        public function register($username , $password , $status = 0)
        {
            $sql = "SELECT * FROM member WHERE username = '$username'";
            $result = mysqli_query($this->con , $sql);
            if($result->num_rows == 0){
                $sql = "INSERT INTO member (username , password , status) VALUES ('$username' , '$password',$status)";
                $result = mysqli_query($this->con , $sql);
                return 'เพิ่มข้อมูลสำเร็จ';
            }
            else {
                return 'ชื่อผู้ใช้ซ้ำ กรุณาใช้ชื่อผู้ใช้อื่น';
            }
        }

        public function joinTable()
        {
            $sql = "SELECT * FROM cart INNER JOIN member ON cart.m_id = member.m_id";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }


    }

?>