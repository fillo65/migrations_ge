<?php
require_once("dal/OneTable.php");
/*Instancia*/
$courses_editions = new OneTable();
/*DB Tables*/
$courses_editions->setOldTable("aulas_ediciones");
$courses_editions->setNewTable("courses_editions");

/*DB Keys*/
$old_keys = array('fk_aula', 'fk_edicion');
$courses_editions->setOldKeys($old_keys);
$new_keys = array('fk_course','fk_edition');
$courses_editions->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $courses_editions->getAll();

/*Setting Values*/
$courses_editions->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
