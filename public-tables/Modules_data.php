<?php
require_once("dal/OneTable.php");
/*Instancia*/
$modules_data = new OneTable();
/*DB Tables*/
$modules_data->setOldTable("modulos_orden");
$modules_data->setNewTable("modules_data");

/*DB Keys*/
$old_keys = array('fk_modulo','fk_servicio_educativo','orden');
$modules_data->setOldKeys($old_keys);
$new_keys = array('fk_module','fk_service','order_module_data');
$modules_data->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $modules_data->getAll();

/*Setting Values*/
$modules_data->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
