<?php
require_once("dal/OneTable.php");
/*Instancia*/
$services_type = new OneTable();
/*DB Tables*/
$services_type->setOldTable("type_services");
$services_type->setNewTable("services_types");

/*DB Keys*/
$old_keys = array('id_type_services','name');
$services_type->setOldKeys($old_keys);
$new_keys = array('id_service_type','name_service');
$services_type->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $services_type->getAll();

/*Setting Values*/
$services_type->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
