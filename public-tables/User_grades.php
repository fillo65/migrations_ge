<?php
require_once("dal/OneTable.php");
/*Instancia*/
$user_grades = new OneTable();
/*DB Tables*/
$user_grades->setOldTable("notas_alumnos");
$user_grades->setNewTable("grades_items");

/*DB Keys*/
$old_keys = array('fk_alumno','fk_nota','nota_alumno','comentario');
$user_grades->setOldKeys($old_keys);
$new_keys = array('fk_user','fk_grade','grade_grade_item','comment_grade_item');
$user_grades->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $user_grades->getAll();

/*Setting Values*/
$user_grades->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
