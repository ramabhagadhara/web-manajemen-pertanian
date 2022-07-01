<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id_penanaman!=null){
        $id_penanaman = $data->id_penanaman;
        $id_lahan = $data->id_lahan;
        $nama_benih = $data->nama_benih;
        $jumlah_benih = $data->jumlah_benih;
        $harga_benih = $data->harga_benih;
        $tanggal_menanam = $data->tanggal_menanam;

        $sql = $conn->prepare("UPDATE penanaman SET id_lahan=?, nama_benih=?, jumlah_benih=?, harga_benih=?,tanggal_menanam=? WHERE id_penanaman=?");
        $sql->bind_param('dsddsd',$id_lahan,$nama_benih,$jumlah_benih,$harga_benih,$tanggal_menanam,$id_penanaman);
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