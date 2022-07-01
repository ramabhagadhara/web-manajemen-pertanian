<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("localhost:80/api_pertanian/petugas/api_tampil_all.php/");
$data = json_decode($data, TRUE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

<div class="container">

  <h1>DATA PETUGAS</h1>

<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id_petugas</th>
      <th scope="col">username</th>
      <th scope="col">pass</th>
      <th scope="col">nama_petugas</th>
      <th scope="col">noHp_petugas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    <?php foreach($data as $data ) : ?>
  <tr>
      <td><?=  $data["id_petugas"]; ?></td>
      <td><?=  $data["username"]; ?></td>
      <td><?=  $data["pass"]; ?></td>
      <td><?=  $data["nama_petugas"]; ?></td>
      <td><?=  $data["noHp_petugas"]; ?></td>
      <td><a href="hapusdata.php?idbarang=<?= $data['id_petugas'] ?>" class="btn btn-danger">hapus</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>
  </tbody>
</table>
<button onclick="window.location.href='tambah-petugas.php'" type="button" class="btn btn-primary">Tambah Data</button>
<button onclick="window.location.href='index.php'" type="button"  class="btn btn-success" >Kembali</button>

</div>
<script>
function hapusPenduduk(idPenduduk, namaPenduduk) {
        console.log("hapus penduduk");
        const alamatWebService = `localhost:80/api_pertanian/petugas/api_hapus.php`;

        axios.delete(alamatWebService)
          .then(function (dataDariWebServiceNihGuys){
            console.log(dataDariWebServiceNihGuys.data["data"]);
            alert(`Data ${id_petugas} berhasil dihapus`);
            tampilkanSemuaPenduduk();
          })
      }
</script>
</body>
</html>