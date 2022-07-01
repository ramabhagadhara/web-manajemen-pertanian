<?php
require 'function.php';
if (isset($_POST["selesai"])) {
    if (tambah3($_POST) > 0) {
        echo " <script> alert('Data baru berhasil ditambahkan!'); document.location.href = 'data-penanaman.php'; </script> ";
    } else {
        echo " <script> alert('Data baru gagal ditambahkan!'); document.location.href = 'data-penanaman.php'; </script> ";
    }
}if(isset($_POST['kembali'])){
    echo '
    <script>
    window.location.href="data-penanaman.php";
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
    <h2>Tambah Data Penanaman</h2>
<form action="" method="post" enctype="multipart/form-data">
       
<div class="form-floating mb-3">
  <input type="test" name="id_lahan" class="form-control" id="id_lahan" placeholder="id_lahan">
  <label for="id_lahan">id Lahan</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="nama_benih" class="form-control" id="nama_benih" placeholder="nama_benih">
  <label for="nama_benih">Nama Benih</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="jumlah_benih" class="form-control" id="jumlah_benih" placeholder="jumlah_benih">
  <label for="jumlah_benih">Jumlah Benih</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="harga_benih" class="form-control" id="harga_benih" placeholder="harga_benih">
  <label for="harga_benih">Harga Benih</label>
</div>
<div class="form-floating mb-3">
  <input type="date" name="tanggal_menanam" class="form-control" id="tanggal_menanam" placeholder="tanggal_menanam">
  <label for="tanggal_menanam">Tanggal Menanam</label>
</div>
  <button type="submit" name="selesai" class="btn btn-primary">Simpan</button>
  <button onclick="window.location.href='data-penanaman.php'" type="submit" name="kembali" class="btn btn-success">Kembali</button>
 </form>
</div>

</body>
</html>