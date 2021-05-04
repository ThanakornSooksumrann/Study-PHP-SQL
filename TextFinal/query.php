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

        //adduser
        public function adduser($username, $password, $status)
        {
            $sql = "INSERT INTO member (username, password, status) 
            VALUES ('$username', '$password', '$status')";
            $result = mysqli_query($this->con,$sql);
            return $result;
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
            if(count($pic) === 1){
                $sql = "UPDATE product SET p_name='$p_name' , p_des='$p_des', p_amount=$p_amount , p_price=$p_price WHERE p_id='$p_id'";
            } else {
                if(move_uploaded_file($pic[1],'uploads/'.$pic[0])){
                    $sql = "UPDATE product SET p_name='$p_name' , p_des='$p_des', p_amount=$p_amount , p_price=$p_price , p_pic = '$pic[0]' WHERE p_id='$p_id'";
                }
            }
            $result = mysqli_query($this->con,$sql);
            return $result;
        }

        //delete
        public function del($p_id)
        {
            $sql = "DELETE FROM product WHERE p_id = '$p_id'";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }

        public function login($username , $password)
        {
            $sql = "SELECT * FROM member WHERE username ='$username'";
            $result = mysqli_query($this->con , $sql);

            if($result->num_rows > 0){
                $user = $result->fetch_assoc();

            if ($user['password']== $password){
                return array('m_id'=>$user['m_id'] , 'status'=>$user['status']  );
            }
            else {
                return 'รหัสผิด';
            }
            
            }
            else{
                return 'ไม่พบผู้ใช้';
            }

        }

        public function joinTable(){
            $sql = "SELECT * FROM card INNER JOIN member ON card.m_id = member.m_id";
            $result = mysqli_query($this->con , $sql);
            return $result;
        }
    }
?>