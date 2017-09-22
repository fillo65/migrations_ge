<?php
require_once("dal/OneTable.php");
/*Instancia*/
$users = new OneTable();
/*Old DB Table*/
$users->setOldTable("users");
/*Getting data from old DB*/
$data = $users->getAll();
/*Old DB Keys same Order*/
$old_keys = array('id_users','username_users','password_users','passphrase_users','fk_id_rols_users');
/*New DB Table*/
$users->setNewTable("users");
/*New DB Keys same Order*/
$values["new"] = array('id_user','email_user','password_user','passphrase_user','fk_role');
/*Getting Values*/
$values["data"]= $users->getValues($data, $old_keys);
/*Setting Keys=>Values to New DB => $object->upgrade*/
