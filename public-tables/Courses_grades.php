<?php
require_once("dal/OneTable.php");
/*Instancia*/
$courses_grades = new OneTable();
/*DB Tables*/
$courses_grades->setOldTable("aulas_notas");
$courses_grades->setNewTable("grades");

/*DB Keys*/
$old_keys = array('id_aulas_notas','title_aulas_notas','fk_aula','coment_aulas_notas');
$courses_grades->setOldKeys($old_keys);
$new_keys = array('id_grade','name_grade','fk_course','description_grade');
$courses_grades->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $courses_grades->getAll();

/*Setting Values*/
$courses_grades->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
