<?php
require 'function.php';
if (isset($_POST["selesai"])) {
    if (tambah($_POST) > 0) {
        echo " <script> alert('Data baru berhasil ditambahkan!'); document.location.href = 'data-petugas.php'; </script> ";
    } else {
        echo " <script> alert('Data baru gagal ditambahkan!'); document.location.href = 'data-petugas.php'; </script> ";
    }
}if(isset($_POST['kembali'])){
    echo '
    <script>
    window.location.href="data-petugas.php";
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
    <h2>Tambah Data Petugas</h2>
<form action="" method="post" enctype="multipart/form-data">
       
<div class="form-floating mb-3">
  <input type="test" name="username" class="form-control" id="username" placeholder="username">
  <label for="username">Username</label>
</div>
<div class="form-floating mb-3">
  <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" placeholder="nama_petugas">
  <label for="nama_petugas">Nama Petugas</label>
</div>
<div class="form-floating mb-3">
  <input type="text" name="noHp_petugas" class="form-control" id="noHp_petugas" placeholder="noHp_petugas">
  <label for="noHp_petugas">No Hp Petugas</label>
</div>
  <button type="submit" name="selesai" class="btn btn-primary">Simpan</button>
  <button onclick="window.location.href='data-petugas.php'" type="submit" name="kembali" class="btn btn-success">Kembali</button>
 </form>
</div>

</body>
</html>