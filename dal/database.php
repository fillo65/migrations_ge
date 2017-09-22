<?php
class Database {
  public $old_mysqli;
  public $new_mysqli;
  private $db;
  function __construct() {
    $this->old_mysqli = new mysqli("localhost", "root", "", "old_devadmin");
    $this->new_mysqli = new mysqli("localhost", "root", "", "new_devadmin");

    $this->new_mysqli->query("SET NAMES 'utf8'");
    $this->old_mysqli->query("SET NAMES 'utf8'");
  }

  function getRecord($stmt, $dbo = "old") {
    $out = '';
    $output = array();

    if($dbo == "new"){
      $result = $this->new_mysqli->query($stmt);
    }else{
      $result = $this->old_mysqli->query($stmt);
    }

    if ($result->num_rows>0) {
      while ($row = $result->fetch_assoc()) {
        $output[] = $row;
      }
      $out = $output;
    } else {
      $out = "ha fallado la consulta " . $this->db->errno;
    }
    return $out;
  }

  function setRecords($stmt){
    $res = false;
    //
    if($result = $this->new_mysqli->query($stmt)){
    //   $res = true;
    }
    print_r($this->new_mysqli->error_list);
    // printf("Errormessage: %s\n",$this->new_mysqli->error_list);
    return $res;
  }

}
