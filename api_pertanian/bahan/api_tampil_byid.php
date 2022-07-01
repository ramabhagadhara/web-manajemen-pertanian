<?php
    require_once('../config/koneksi_db.php');

    $myArray = array();
    if(isset($_GET['id_bahan'])){
        $id = $_GET['id_bahan'];

        if($result = mysqli_query($conn,"SELECT * FROM bahan WHERE id_bahan = $id")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>