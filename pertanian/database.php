<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertanian";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "SELECT nama_benih, COUNT(*) AS jumlah FROM `penanaman` GROUP BY nama_benih";

$result = $conn ->query($sql);

if ($result->num_rows>0) {
    
    $final_array = array();
    while($row = $result->fetch_assoc()){

        $arr = array(
            'nama_benih' => $row ['nama_benih'],
            'jumlah' => $row ['jumlah']
        );
        $final_array[] = $arr;
    }
    return json_encode($final_array);

} else {
  echo "FAILURE ";
}

$conn->close();
?>