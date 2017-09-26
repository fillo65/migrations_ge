<?php
require_once("dal/OneTable.php");
/*Instancia*/
$calendars = new OneTable();
/*DB Tables*/
$calendars->setOldTable("calendars");
$calendars->setNewTable("calendars");

/*DB Keys*/
$old_keys = array('id_calendar', 'nombre', 'autor');
$calendars->setOldKeys($old_keys);
$new_keys = array('id_calendar','name_calendar','fk_author_calendar');
$calendars->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $calendars->getAll();

/*Setting Values*/
$calendars->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
