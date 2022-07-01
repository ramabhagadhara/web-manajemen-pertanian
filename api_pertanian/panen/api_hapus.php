<?php
     require_once('../config/koneksi_db.php');
     $data = json_decode(file_get_contents("php://input"));

     if ($data->id_panen!=null){
        $id_panen = $data->id_panen;
        $sql = $conn->prepare("DELETE * FROM panen WHERE id_panen=?");
        $sql->bind_param('i',$id_panen);
        $sql->execute();

        if($sql){
            echo json_encode(array('RESPONSE' =>'SUCCES'));
        }else{
            echo json_encode(array('RESPONSE' =>'FAILED'));
        }
     }else{
        echo "GAGAL";
     }
?>