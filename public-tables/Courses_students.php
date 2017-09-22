<?php
require_once("dal/OneTable.php");
/*Instancia*/
$courses_students = new OneTable();
/*DB Tables*/
$courses_students->setOldTable("aulas_alumnos");
$courses_students->setNewTable("courses_students");

/*DB Keys*/
$old_keys = array('fk_aula', 'fk_alumno');
$courses_students->setOldKeys($old_keys);
$new_keys = array('fk_course','fk_user');
$courses_students->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $courses_students->getAll();

/*Setting Values*/
$courses_students->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
