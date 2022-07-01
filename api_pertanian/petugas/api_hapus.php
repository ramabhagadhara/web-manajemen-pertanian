<?php
     require_once('../config/koneksi_db.php');
     $data = json_decode(file_get_contents("php://input"));

     if ($data->id_petugas!=null){
        $id_petugas = $data->id_petugas;
        $sql = $conn->prepare("DELETE * FROM petugas WHERE id_petugas=?");
        $sql->bind_param('i',$id_petugas);
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