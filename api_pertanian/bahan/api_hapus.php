<?php
     require_once('../config/koneksi_db.php');
     $data = json_decode(file_get_contents("php://input"));

     if ($data->id_bahan!=null){
        $id_bahan = $data->id_bahan;
        $sql = $conn->prepare("DELETE * FROM bahan WHERE id_bahan=?");
        $sql->bind_param('i',$id_bahan);
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