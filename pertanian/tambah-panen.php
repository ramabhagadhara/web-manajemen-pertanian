<?php
require 'function.php';
if (isset($_POST["selesai"])) {
    if (tambah4($_POST) > 0) {
        echo " <script> alert('Data baru berhasil ditambahkan!'); document.location.href = 'data-panen.php'; </script> ";
    } else {
        echo " <script> alert('Data baru gagal ditambahkan!'); document.location.href = 'tambah-panen.php'; </script> ";
    }
}if(isset($_POST['kembali'])){
    echo '
    <script>
    window.location.href="data-panen.php";
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
    <h2>Tambah Data Panen</h2>
<form action="" method="post" enctype="multipart/form-data">
       
<div class="form-floating mb-3">
  <input type="test" name="id_penanaman" class="form-control" id="id_penanaman" placeholder="id_penanaman">
  <label for="id_penanaman">id Penanaman</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="id_lahan" class="form-control" id="id_lahan" placeholder="id_lahan">
  <label for="id_lahan">id Lahan</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="hasil_panen" class="form-control" id="hasil_panen" placeholder="hasil_panen">
  <label for="hasil_panen">Hasil Panen</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="harga_jual" class="form-control" id="harga_jual" placeholder="harga_jual">
  <label for="harga_jual">Harga Jual</label>
</div>
<div class="form-floating mb-3">
  <input type="date" name="tanggal_panen" class="form-control" id="tanggal_panen" placeholder="tanggal_panen">
  <label for="tanggal_panen">Tanggal Panen</label>
</div>
  <button type="submit" name="selesai" class="btn btn-primary">Simpan</button>
  <button onclick="window.location.href='data-panen.php'" type="submit" name="kembali" class="btn btn-success">Kembali</button>
 </form>
</div>

</body>
</html>