<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertanian";

$id_lahan = $_POST['id_lahan'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "SELECT id_lahan,hasil_panen,harga_jual,tanggal_panen,harga_jual*hasil_panen AS total FROM panen WHERE id_lahan = '$id_lahan' GROUP BY total";

$result = $conn ->query($sql);

if ($result->num_rows>0) {
    
    $final_array = array();
    while($row = $result->fetch_assoc()){

        $arr = array(
            'tanggal_panen' => $row ['tanggal_panen'],
            'total' => $row ['total']
        );
        $final_array[] = $arr;
    }
    echo json_encode($final_array);

} else {
  echo "FAILURE ";
}

$conn->close();
?>