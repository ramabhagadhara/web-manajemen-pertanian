<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost","root","","pertanian");

    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $row = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    //Tambah data 
    function tambah($data) {
        global $conn;
        $username = htmlspecialchars($data["username"]);
        $pass = htmlspecialchars($data["pass"]);
        $nama_petugas = htmlspecialchars($data["nama_petugas"]);
        $noHp_petugas = htmlspecialchars($data["noHp_petugas"]);
        mysqli_query($conn, "INSERT INTO petugas VALUES('', '$username', '$pass', '$nama_petugas','$noHp_petugas') ");
        return mysqli_affected_rows($conn);
    }

    function tambah2($data) {
        global $conn;
        $id_petugas = htmlspecialchars($data["id_petugas"]);
        $nama_lahan = htmlspecialchars($data["nama_lahan"]);
        $luas_lahan = htmlspecialchars($data["luas_lahan"]);
        $jenis_tanah = htmlspecialchars($data["jenis_tanah"]);
        mysqli_query($conn, "INSERT INTO lahan VALUES('', '$id_petugas', '$nama_lahan', '$luas_lahan','$jenis_tanah') ");
        return mysqli_affected_rows($conn);
    }

    function tambah3($data) {
        global $conn;
        $id_lahan = htmlspecialchars($data["id_lahan"]);
        $nama_benih = htmlspecialchars($data["nama_benih"]);
        $jumlah_benih = htmlspecialchars($data["jumlah_benih"]);
        $harga_benih = htmlspecialchars($data["harga_benih"]);
        $tanggal_menanam = htmlspecialchars($data["tanggal_menanam"]);
        mysqli_query($conn, "INSERT INTO penanaman VALUES('', '$id_lahan', '$nama_benih', '$jumlah_benih','$harga_benih','$tanggal_menanam') ");
        return mysqli_affected_rows($conn);
    }

    function tambah4($data) {
        global $conn;
        $id_penanaman = htmlspecialchars($data["id_penanaman"]);
        $id_lahan = htmlspecialchars($data["id_lahan"]);
        $hasil_panen = htmlspecialchars($data["hasil_panen"]);
        $harga_jual = htmlspecialchars($data["harga_jual"]);
        $tanggal_panen = htmlspecialchars($data["tanggal_panen"]);
        mysqli_query($conn, "INSERT INTO panen VALUES('', '$id_penanaman', '$id_lahan','$hasil_panen','$harga_jual','$tanggal_panen') ");
        return mysqli_affected_rows($conn);
    }
?>