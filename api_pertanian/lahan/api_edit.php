<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id_lahan!=null){
        $id_lahan = $data->id_lahan;
        $id_petugas = $data->id_petugas;
        $nama_lahan = $data->nama_lahan;
        $luas_lahan = $data->luas_lahan;
        $jenis_tanah = $data->jenis_tanah;

        $sql = $conn->prepare("UPDATE lahan SET id_petugas=?, nama_lahan=?, luas_lahan=?, jenis_tanah=? WHERE id_lahan=?");
        $sql->bind_param('dsdsd',$id_petugas,$nama_lahan,$luas_lahan,$jenis_tanah,$id_lahan);
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