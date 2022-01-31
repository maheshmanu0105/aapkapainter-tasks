<?php
function getFirstRepetition($array) {
	$prev = array();
	foreach($array as $value) {
	if (in_array($value, $prev)) {
    		return $value;
 	}
        $prev[] = $value;
	}
        return FALSE;
}
var_dump(getFirstRepetition(array(6, 12, 14, 2, 16,14)));
?>
