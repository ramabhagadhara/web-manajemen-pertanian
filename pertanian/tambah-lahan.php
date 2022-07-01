<?php
require 'function.php';
if (isset($_POST["selesai"])) {
    if (tambah2($_POST) > 0) {
        echo " <script> alert('Data baru berhasil ditambahkan!'); document.location.href = 'data-lahan.php'; </script> ";
    } else {
        echo " <script> alert('Data baru gagal ditambahkan!'); document.location.href = 'data-lahan.php'; </script> ";
    }
}if(isset($_POST['kembali'])){
    echo '
    <script>
    window.location.href="data-lahan.php";
    </script>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Tambah Data Lahan</h2>
<form action="" method="post" enctype="multipart/form-data">
       
<div class="form-floating mb-3">
  <input type="test" name="id_petugas" class="form-control" id="id_petugas" placeholder="id_petugas">
  <label for="id_petugas">id Petugas</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="nama_lahan" class="form-control" id="nama_lahan" placeholder="nama_lahan">
  <label for="nama_lahan">Nama Lahan</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="luas_lahan" class="form-control" id="luas_lahan" placeholder="luas_lahan">
  <label for="luas_lahan">Luas Lahan</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="jenis_tanah" class="form-control" id="jenis_tanah" placeholder="jenis_tanah">
  <label for="jenis_tanah">Jenis Tanah</label>
</div>
  <button type="submit" name="selesai" class="btn btn-primary">Simpan</button>
  <button onclick="window.location.href='data-lahan.php'" type="submit" name="kembali" class="btn btn-success">Kembali</button>
 </form>
</div>

</body>
</html>