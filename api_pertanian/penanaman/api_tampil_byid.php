<?php
    require_once('../config/koneksi_db.php');

    $myArray = array();
    if(isset($_GET['id_penanaman'])){
        $id = $_GET['id_penanaman'];

        if($result = mysqli_query($conn,"SELECT * FROM penanaman WHERE id_penanaman = $id")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>