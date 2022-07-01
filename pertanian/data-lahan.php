<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("localhost:80/api_pertanian/lahan/api_tampil_all.php/");
$data = json_decode($data, TRUE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>DATA LAHAN</h1>

<div class="container">
<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id_lahan</th>
      <th scope="col">id_petugas</th>
      <th scope="col">nama_lahan</th>
      <th scope="col">luas_lahan</th>
      <th scope="col">jenis_tanah</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    <?php foreach($data as $data ) : ?>
  <tr>
      <td><?=  $data["id_lahan"]; ?></td>
      <td><?=  $data["id_petugas"]; ?></td>
      <td><?=  $data["nama_lahan"]; ?></td>
      <td><?=  $data["luas_lahan"]; ?> </td>
      <td><?=  $data["jenis_tanah"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>
  </tbody>
</table>
<button onclick="window.location.href='tambah-lahan.php'" type="button" class="btn btn-primary">Tambah Data</button>
<button onclick="window.location.href='index.php'" type="button"  class="btn btn-success" >Kembali</button>
</div>


</body>
</html>