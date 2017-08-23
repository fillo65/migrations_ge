

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
$sql = "SELECT * FROM users ";
// executing
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // print_r($row);
    $arsql = "INSERT INTO `users` (`id_user`, `email_user`, `password_user`, `passphrase_user`, `fk_role`) VALUES ";
    $arsql .= "('".$row["id_users"]."','".$row["username_users"]."','".$row["password_users"]."','".$row["passphrase_users"]."','".($row["fk_id_rols_users"])."')";
    echo $arsql . "\n";
    $new_conn->query($arsql);
    echo $row["id_users"] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
