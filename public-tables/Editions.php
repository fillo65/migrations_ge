<?php
require_once("dal/OneTable.php");
/*Instancia*/
$editions = new OneTable();
/*DB Tables*/
$editions->setOldTable("ediciones");
$editions->setNewTable("editions");

/*DB Keys*/
$old_keys = array('id_ediciones',  'anio_init',  'mes_init',  'fk_servicio');
$editions->setOldKeys($old_keys);
$new_keys = array('id_edition','year_edition','month_edition','fk_service');
$editions->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $editions->getAll("ORDER BY id_ediciones");

/*Setting Values*/
$editions->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
