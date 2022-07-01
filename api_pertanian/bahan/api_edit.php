<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id_bahan!=null){
        $id_bahan = $data->id_bahan;
        $id_penanaman = $data->id_penanaman;
        $nama_bahan = $data->nama_bahan;
        $jumlah_bahan = $data->jumlah_bahan;
        $satuan = $data->satuan;
        $harga_bahan = $data->harga_bahan;

        $sql = $conn->prepare("UPDATE bahan SET id_penanaman=?, nama_bahan=?, jumlah_bahan=?, satuan=?,harga_bahan=? WHERE id_bahan=?");
        $sql->bind_param('dsdsdd',$id_penanaman,$nama_bahan,$jumlah_bahan,$satuan,$harga_bahan,$id_bahan);
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