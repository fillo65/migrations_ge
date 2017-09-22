<?php
require_once("dal/OneTable.php");
/*Instancia*/
$users = new OneTable();
/*DB Tables*/
$users->setOldTable("users");
$users->setNewTable("users");

/*DB Keys*/
$old_keys = array('id_users','username_users','password_users','passphrase_users','fk_id_rols_users');
$users->setOldKeys($old_keys);
$new_keys = array('id_user','email_user','password_user','passphrase_user','fk_role');
$users->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $users->getAll();

/*Setting Values*/
$users->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
