<?php
class olddb extends Database {

    function get_table($table) {
        $stmt = 'SELECT * FROM '.$table;
        return $this->getRecord($stmt);
    }

}
