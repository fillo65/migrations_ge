<?php
require_once("dal/OneTable.php");
/*Instancia*/
$services = new OneTable();
/*DB Tables*/
$services->setOldTable("servicios");
$services->setNewTable("services");

/*DB Keys*/
$old_keys = array('id_servicio','name_servicio','price_servicio');
$services->setOldKeys($old_keys);
$new_keys = array('id_service','name_service','price_service');
$services->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $services->getAll();

/*Setting Values*/
$services->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
