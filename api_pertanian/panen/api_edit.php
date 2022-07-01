<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id_panen!=null){
        $id_panen = $data->id_panen;
        $id_penanaman = $data->id_penanaman;
        $hasil_panen = $data->hasil_panen;
        $harga_jual = $data->harga_jual;
        $tanggal_panen = $data->tanggal_panen;

        $sql = $conn->prepare("UPDATE panen SET id_penanaman=?, hasil_panen=?, harga_jual=?, tanggal_panen=? WHERE id_panen=?");
        $sql->bind_param('dddsd',$id_penanaman,$hasil_panen,$harga_jual,$tanggal_panen,$id_panen);
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