<?php
    require_once('../config/koneksi_db.php');
    if(isset($_POST['id_penanaman']) && isset($_POST['nama_bahan']) && isset($_POST['jumlah_bahan']) && isset($_POST['satuan']) && isset($_POST['harga_bahan'])){
        $id_penanaman = $_POST['id_penanaman'];
        $nama_bahan = $_POST['nama_bahan'];
        $jumlah_bahan = $_POST['jumlah_bahan'];
        $satuan = $_POST['satuan'];
        $harga_bahan = $_POST['harga_bahan'];
        $sql = $conn->prepare("INSERT INTO bahan (id_penanaman,nama_bahan,jumlah_bahan,satuan,harga_bahan) VALUES (?,?,?,?,?)");
        $sql->bind_param('dsdsd',$id_penanaman,$nama_bahan,$jumlah_bahan,$satuan,$harga_bahan);
        $sql->execute();
        if($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo "GAGAL";
        }
    }
?>