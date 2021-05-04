<?php
    require('query.php');
    $p_id = $_REQUEST['p_id'];
    $delete = new query();
    $sql = $delete->del($p_id);

    if($sql){
        echo "<script>
            alert('ลบข้อมูลสำเร็จ');
            window.location.href='show.php';
        </script>";
    } else {
        echo "<script>
            alert('ลบข้อมูลไม่สำเร็จ');
            window.location.href='show.php';
        </script>";
    }
?>