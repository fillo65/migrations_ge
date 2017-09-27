<?php
require_once("dal/OneTable.php");
/*Instancia*/
$roles = new OneTable();
/*DB Tables*/
$roles->setOldTable("rols");
$roles->setNewTable("roles");

/*DB Keys*/
$old_keys = array('id_rols','name_rols');
$roles->setOldKeys($old_keys);
$new_keys = array('id_role','name_role');
$roles->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $roles->getAll();

/*Setting Values*/
$roles->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
