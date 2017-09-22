<?php
require_once("database.php");
class Users extends database{
  public $stmt;
  function __construct(){
    parent::__construct();
  }

  function getAll(){
    $query = "SELECT * FROM users";
    return $this->getRecord($query);
  }

  function upgrade($data){
    $res = true;
    foreach ($data as $row) {
      $this->stmt =  "INSERT INTO `users`(`id_user`, `email_user`, `password_user`, `passphrase_user`, `fk_role`) VALUES ";
      $this->stmt .= "(".$row["id_users"].",'".$row["username_users"]."','".$row["password_users"]."','".$row["passphrase_users"]."',".($row["fk_id_rols_users"])."); ";
      if($this->setRecords($this->stmt) == false){
        $res = false;
        break;
      }
    }
    return $res;
  }

}


// // -------------------------------------------------
// $out_2 = '';
// // init query
// $sql = "SELECT * FROM users ";
// // executing
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     // print_r($row);
//
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
//
// ?>
