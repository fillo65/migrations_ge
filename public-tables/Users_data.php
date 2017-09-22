<?php
require_once("dal/OneTable.php");
/*Instancia*/
$users_data = new OneTable();
/*DB Tables*/
$users_data->setOldTable("people");
$users_data->setNewTable("users_data");

/*DB Keys*/
$old_keys = array("id_people", "fname_people", array("lname1_people", "lname2_people"), "email_people2", "address_people", "postal_code", "phone_people", "phone_people2", "f_nacimiento", "photo_people", "nacionalidad", "fk_reside_people", "fk_city_people", "comment_people");
$users_data->setOldKeys($old_keys);
$new_keys = array('fk_user','name_user','last_name_user','email2_user','address_user','zipcode_user','phone_user','phone2_user','dob_user','photo_user','country_natural_user','country_resident_user','city_resident__user','comment_user');
$users_data->setNewKeys($new_keys);

/*Getting data from old DB*/
$data = $users_data->getAll();

/*Setting Values*/
$users_data->setVals($data);

/*Setting Keys=>Values to New DB => $object->upgrade*/
