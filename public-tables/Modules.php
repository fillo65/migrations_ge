<?php
require_once("dal/OneTable.php");
/*Instancia*/
$modules = new OneTable();
/*DB Tables*/
$modules->setOldTable("modulos");
$modules->setNewTable("modules");

/*DB Keys*/
$old_keys = array('id_modulo','nombre_modulo','prefix_vc_modulo','bg_modulo','imagen_modulo');
$modules->setOldKeys($old_keys);
$new_keys = array('id_module','name_module','link_module','color_module','img_module');
$modules->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $modules->getAll();

/*Setting Values*/
$modules->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
