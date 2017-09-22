<?php
require_once("dal/OneTable.php");
/*Instancia*/
$editions = new OneTable();
/*Old DB Table*/
$editions->setOldTable("ediciones");
/*Getting data from old DB*/
$data = $editions->getAll("ORDER BY id_ediciones");
/*Old DB Keys same Order*/
$old_keys = array('id_ediciones',  'anio_init',  'mes_init',  'fk_servicio');
/*New DB Table*/
$editions->setNewTable("editions");
/*New DB Keys same Order*/
$values["new"] = array('id_edition','year_edition','month_edition','fk_service');
/*Getting Values*/
$values["data"]= $editions->getValues($data, $old_keys);
/*Setting Keys=>Values to New DB => $object->upgrade*/
