<?php

    session_start();
    require('query.php');
    // เช็คเข้าไหม print_r($_POST);
    $query = new query();

    $sql = $query->login($_POST['username'],$_POST['password']);

    if(is_array($sql)){
        $_SESSION['user_id'] = $sql['m_id'];
        $_SESSION['status'] = $sql['status'];

        if($sql['status']==0){
            echo "<script>
            alert('เข้าระบบสำเร็จ');
            window.location.href='admin.php';
            </script>";
        }
        else{
            echo "<script>
            alert('เข้าระบบสำเร็จ');
            window.location.href='user.php';
            </script>";
        }
    }
    else 
    {
        echo "<script>
            alert('$sql');
            window.location.href='login.php';
            </script>";
    }

?>