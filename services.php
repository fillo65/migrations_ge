

<?php
// starting cnx
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "old_devadmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$new_dbname = "devadmin";
$new_conn = new mysqli($servername, $username, $password, $new_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($new_conn->connect_error) {
  die("Connection failed: " . $new_conn->connect_error);
}
// -------------------------------------------------
$out_2 = '';
// init query
$sql = "SELECT * FROM servicios ORDER BY id_servicio";
// executing
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // $row["name_servicio"] = utf8_encode($row["name_servicio"]);
    // print_r($row);
    $arsql = "INSERT INTO `services` (`id_service`, `name_service`, `price_service`) VALUES  ";
    $arsql .= "('".$row["id_servicio"]."','".($row["name_servicio"])."', '".$row["price_servicio"]."')";
    $new_conn->query($arsql);
    echo $row["id_servicio"] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
