<?php
require_once("dal/OneTable.php");
/*Instancia*/
$countries = new OneTable();
/*DB Tables*/
$countries->setOldTable("countries");
$countries->setNewTable("countries");

/*DB Keys*/
$old_keys = array('id_country','name_country');
$countries->setOldKeys($old_keys);
$new_keys = array('id_country','name_country');
$countries->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $countries->getAll();

/*Setting Values*/
$countries->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
