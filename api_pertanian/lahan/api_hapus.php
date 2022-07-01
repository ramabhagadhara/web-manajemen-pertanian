<?php
     require_once('../config/koneksi_db.php');
     $data = json_decode(file_get_contents("php://input"));

     if ($data->id_lahan!=null){
        $id_lahan = $data->id_lahan;
        $sql = $conn->prepare("DELETE * FROM lahan WHERE id_lahan=?");
        $sql->bind_param('i',$id_lahan);
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