<?php
require_once("dal/OneTable.php");
/*Instancia*/
$courses = new OneTable();
/*DB Tables*/
$courses->setOldTable("aulas");
$courses->setNewTable("courses");

/*DB Keys*/
$old_keys = array('id_aula','fk_modulo','url_aula');
$courses->setOldKeys($old_keys);
$new_keys = array('id_course','fk_module','url_course');
$courses->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $courses->getAll("ORDER BY id_aula");

/*Setting Values*/
$courses->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
