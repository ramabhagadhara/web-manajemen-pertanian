<?php
    require_once('../config/koneksi_db.php');
    $myArray = array();
    if($result = mysqli_query($conn,"SELECT * FROM lahan ORDER BY id_lahan ASC")){
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $myArray [] = $row; 
        }
        mysqli_close($conn);
        echo json_encode($myArray);
    }
?>