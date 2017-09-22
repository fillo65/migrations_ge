<?php
require_once("dal/OneTable.php");
/*Instancia*/
$courses_teachers = new OneTable();
/*DB Tables*/
$courses_teachers->setOldTable("aulas_profesores");
$courses_teachers->setNewTable("courses_teachers");

/*DB Keys*/
$old_keys = array('fk_aula', 'fk_profesor');
$courses_teachers->setOldKeys($old_keys);
$new_keys = array('fk_course','fk_user');
$courses_teachers->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $courses_teachers->getAll();

/*Setting Values*/
$courses_teachers->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
