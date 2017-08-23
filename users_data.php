

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
$sql = "SELECT * FROM people ";
// executing
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // print_r($row);
    $arsql = "INSERT INTO `users_data` (
      `fk_user`,`name_user`,`last_name_user`,
      `email2_user`,`address_user`,`zipcode_user`,
      `phone_user`,`phone2_user`,`dob_user`,
      `photo_user`, `country_natural_user`,`country_resident_user`,
      `city_resident__user`,`comment_user`) VALUES ";
    $arsql .= "(
      '".$row["id_people"]."', '".$row["fname_people"]."','". trim($row["lname1_people"]). " ". trim($row["lname2_people"])."',
      '".$row["email_people2"]."', '".$row["address_people"]."','".$row["postal_code"]."',
      '".$row["phone_people"]."', '".$row["phone_people2"]."','".$row["f_nacimiento"]."',
      '".$row["photo_people"]."', '".$row["nacionalidad"]."','".$row["fk_reside_people"]."',
      '".$row["fk_city_people"]."', '".$row["comment_people"]."'
    )";
    // echo $arsql . "\n";
    $new_conn->query($arsql);
    echo $row["id_people"] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
