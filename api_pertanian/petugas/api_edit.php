<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id_petugas!=null){
        $id_petugas = $data->id_petugas;
        $username = $data->username;
        $pass = $data->pass;
        $nama_petugas = $data->nama_petugas;
        $noHp_petugas = $data->noHp_petugas;

        $sql = $conn->prepare("UPDATE petugas SET username=?, pass=?, nama_petugas=?, noHp_petugas=? WHERE id_petugas=?");
        $sql->bind_param('ssssd',$username,$pass,$nama_petugas,$noHp_petugas,$id_petugas);
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