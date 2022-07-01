<?php
     require_once('../config/koneksi_db.php');
     $data = json_decode(file_get_contents("php://input"));

     if ($data->id_penanaman!=null){
        $id_penanaman = $data->id_penanaman;
        $sql = $conn->prepare("DELETE * FROM penanaman WHERE id_penanaman=?");
        $sql->bind_param('i',$id_penanaman);
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