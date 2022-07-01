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
$sql = "SELECT id_lahan,SUM(hasil_panen) AS total_jumlah FROM panen GROUP BY id_lahan";

$result = $conn ->query($sql);

if ($result->num_rows>0) {
    
    $final_array = array();
    while($row = $result->fetch_assoc()){

        $arr = array(
            'id_lahan' => $row ['id_lahan'],
            'total_jumlah' => $row ['total_jumlah']
        );
        $final_array[] = $arr;
    }
    return json_encode($final_array);

} else {
  echo "FAILURE ";
}

$conn->close();
?>