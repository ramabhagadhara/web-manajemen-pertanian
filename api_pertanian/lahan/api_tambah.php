<?php
    require_once('../config/koneksi_db.php');
    if(isset($_POST['id_petugas']) && isset($_POST['nama_Lahan']) && isset($_POST['luas_lahan']) && isset($_POST['jenis_tanah'])){
        $username = $_POST['id_petugas'];
        $pass = $_POST['nama_lahan'];
        $nama_petugas = $_POST['luas_lahan'];
        $noHp_petugas = $_POST['jenis_tanah'];
        $sql = $conn->prepare("INSERT INTO petugas (id_petugas,nama_lahan,luas_lahan,jenis_tanah) VALUES (?,?,?,?)");
        $sql->bind_param('dsds',$id_petugas,$nama_lahan,$luas_lahan,$jenis_tanah);
        $sql->execute();
        if($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo "GAGAL";
        }
    }
?>