<?php
    require_once('../config/koneksi_db.php');
    if(isset($_POST['id_penanaman']) && isset($_POST['hasil_panen']) && isset($_POST['harga_jual']) && isset($_POST['tanggal_panen'])){
        $id_penanaman = $_POST['id_penanaman'];
        $hasil_panen = $_POST['hasil_panen'];
        $harga_jual = $_POST['harga_jual'];
        $tanggal_panen = $_POST['tanggal_panen'];
        $sql = $conn->prepare("INSERT INTO panen (id_penanaman,hasil_panen,harga_jual,tanggal_panen) VALUES (?,?,?,?)");
        $sql->bind_param('ddds',$id_penanaman,$hasil_panen,$harga_jual,$tanggal_panen);
        $sql->execute();
        if($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo "GAGAL";
        }
    }
?>