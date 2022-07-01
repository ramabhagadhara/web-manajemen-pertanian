<?php
    require_once('../config/koneksi_db.php');

    $myArray = array();
    if(isset($_GET['id_petugas'])){
        $id = $_GET['id_petugas'];

        if($result = mysqli_query($conn,"SELECT * FROM petugas WHERE id_petugas = $id")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>