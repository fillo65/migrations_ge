<?php
require_once("database.php");
class OneTable extends Database{
  public $new_table;
  public $new_keys;

  public $old_table;
  public $old_keys;

  public $values;

  function __construct(){
    parent::__construct();
  }

  function setNewTable($t){
    $this->new_table = $t;
  }
  function setNewKeys($k){
    $this->new_keys = $k;
  }

  function setOldTable($t){
    $this->old_table = $t;
  }
  function setOldKeys($k){
    $this->old_keys = $k;
  }

  function setValues($val){
    $this->values = $Val;
  }


  function getAll($string = ""){
    $query = "SELECT * FROM ". $this->old_table . " " . $string;
    return $this->getRecord($query);
  }


  function build($arr, $com="'"){
    $str = '';
    foreach ($arr as $val) {
      $str .= $com . $val .$com. ",";
    }
    return trim($str, ",");
  }

  function setVals($arr){
    $data = array();
    foreach ($arr as $row) {
      $pre_data = array();
      foreach ($this->old_keys as $k) {
        $pre_data[] = $row[$k];
      }
      $data[] = $pre_data;
    }
    $this->values = $data;
  }

  function upgrade(){
    $res = true;
    foreach ($this->values as $row) {
      $this->stmt = "INSERT INTO `".$this->new_table."` (".$this->build($this->new_keys, "`").") VALUES ";
      $this->stmt .= "(".$this->build($row).");";
      if($this->setRecords($this->stmt) == false){
        $res = false;
        break;
      }
    }
    return ($res) ? "Ok " . $this->new_table : "Algo fue mal ". $this->new_table;
  }
}

?>
