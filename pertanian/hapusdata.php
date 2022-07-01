<?php

include 'function.php';
$id = $_GET['id_petugas'];
$hapus = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'");
echo '
        <script>
        alert("Data berhasil dihapus");
        window.location.href="data-petugas.php";
        </script>
        ';
