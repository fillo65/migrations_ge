

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
$sql = "SELECT id_aula,fk_modulo,url_aula FROM aulas ORDER BY id_aula";
// executing
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // print_r($row);
    $arsql = "INSERT INTO `courses` (`id_course`, `fk_module`, `url_course`) VALUES  ";
    $arsql .= "('".$row["id_aula"]."','".($row["fk_modulo"])."', '".$row["url_aula"]."')";
    // echo $arsql . "\n";
    $new_conn->query($arsql);
    echo $row["id_aula"] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
