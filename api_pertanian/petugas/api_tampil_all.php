<?php
    require_once('../config/koneksi_db.php');
    $myArray = array();
    if($result = mysqli_query($conn,"SELECT * FROM petugas ORDER BY id_petugas ASC")){
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $myArray [] = $row; 
        }
        mysqli_close($conn);
        echo json_encode($myArray);
    }
?>