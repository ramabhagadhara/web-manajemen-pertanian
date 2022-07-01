<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("localhost:80/api_pertanian/penanaman/api_tampil_all.php/");
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
<div class="container">
<h1>DATA PENANAMAN</h1>
<button onclick="window.location.href='tambah-penanaman.php'" type="button" class="btn btn-primary">Tambah Data</button>
<button onclick="window.location.href='index.php'" type="button"  class="btn btn-success" >Kembali</button>
<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id_penanaman</th>
      <th scope="col">id_lahan</th>
      <th scope="col">nama_benih</th>
      <th scope="col">jumlah_benih</th>
      <th scope="col">harga_benih</th>
      <th scope="col">tanggal_menanam</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    <?php foreach($data as $data ) : ?>
  <tr>
      <td><?=  $data["id_penanaman"]; ?></td>
      <td><?=  $data["id_lahan"]; ?></td>
      <td><?=  $data["nama_benih"]; ?></td>
      <td><?=  $data["jumlah_benih"]; ?></td>
      <td>Rp.<?=  $data["harga_benih"]; ?></td>
      <td><?=  $data["tanggal_menanam"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>
  </tbody>
</table>
</div>


</body>
</html>