<?php
    require_once('../config/koneksi_db.php');
    if(isset($_POST['id_lahan']) && isset($_POST['nama_benih']) && isset($_POST['jumlah_benih']) && isset($_POST['harga_benih']) && isset($_POST['tanggal_menanam'])){
        $id_lahan = $_POST['id_lahan'];
        $nama_benih = $_POST['nama_benih'];
        $jumlah_benih = $_POST['jumlah_benih'];
        $harga_benih = $_POST['harga_benih'];
        $tanggal_menanam = $_POST['tanggal_menanam'];
        $sql = $conn->prepare("INSERT INTO penanaman (id_lahan,nama_benih,jumlah_benih,harga_benih,tanggal_menanam) VALUES (?,?,?,?,?)");
        $sql->bind_param('dsdds',$id_lahan,$nama_benih,$jumlah_benih,$harga_benih,$tanggal_menanam);
        $sql->execute();
        if($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo "GAGAL";
        }
    }
?>