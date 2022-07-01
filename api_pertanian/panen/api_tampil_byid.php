<?php
    require_once('../config/koneksi_db.php');

    $myArray = array();
    if(isset($_GET['id_panen'])){
        $id = $_GET['id_panen'];

        if($result = mysqli_query($conn,"SELECT * FROM panen WHERE id_panen = $id")){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>