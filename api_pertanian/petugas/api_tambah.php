<?php
    require_once('../config/koneksi_db.php');
    if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['nama_petugas']) && isset($_POST['noHp_petugas'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $nama_petugas = $_POST['nama_petugas'];
        $noHp_petugas = $_POST['noHp_petugas'];
        $sql = $conn->prepare("INSERT INTO petugas (username,pass,nama_petugas,noHp_petugas) VALUES (?,?,?,?)");
        $sql->bind_param('ssss',$username,$pass,$nama_petugas,$noHp_petugas);
        $sql->execute();
        if($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else{
            echo "GAGAL";
        }
    }
?>