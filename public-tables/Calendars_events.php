<?php
require_once("dal/OneTable.php");
/*Instancia*/
$calendars_events = new OneTable();
/*DB Tables*/
$calendars_events->setOldTable("cal_events");
$calendars_events->setNewTable("Calendars_events");

/*DB Keys*/
$old_keys = array('id_event', 'fk_calendar', 'fk_aula', 'start');
$calendars_events->setOldKeys($old_keys);
$new_keys = array('id_event','fk_calendar','fk_course','start_event');
$calendars_events->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $calendars_events->getAll();

/*Setting Values*/
$calendars_events->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
