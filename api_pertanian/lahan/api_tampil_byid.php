<?php
    require_once('../config/koneksi_db.php');

    $myArray = array();
    if(isset($_GET['id_lahan'])){
        $id = $_GET['id_lahan'];

        if($result = mysqli_query($conn,"SELECT * FROM lahan WHERE id_lahan = $id")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>