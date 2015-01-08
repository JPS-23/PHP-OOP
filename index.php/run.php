<?php
$a = false;
$b = 0;

if (is_bool($a) === true) {
    echo "Yes, this is a boolean";
}

if (is_bool($b) === false) {
    echo "No, this is not a boolean";
}

$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';

function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null));
var_dump(get_students($obj));
?>