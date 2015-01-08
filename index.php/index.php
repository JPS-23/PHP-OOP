<?php
	//EXAMPLE:1
class cat{
	//class color
	//class size
	//class body
}
class fish{
	//class color
	//class size
	//class body
}
class tiger{
	//class color
	//class size
	//class body
}
	//EXAMPLE:2
$cat1 = newCat();
$cat2 = newCat();

$fish1 = newFish();
$fish2 = newFish();

$tiger1 = newTiger();
$tiger2 = newTiger();
	//EXAMPLE:3
class cat{
	public$name= "tom";
	public$breed= "cool breed";
	public$gender= "male";
	public$price=10;
}
class fish{
	public$name= "bob";
	public$breed= "small breed";
	public$gender= "male";
	public$price=10;
}
class tiger{
	public$name= "will";
	public$breed= "awesome breed";
	public$gender= "male";
	public$price=10;
}
	//EXAMPLE:4
class cat{
	public $firstName = "tom";
	public $lastName = "smith";
	public $gender = "male";
	public $price = 25;
}
class fish{
	public $firstName = "bob";
	public $lastName = "tomas";
	public $gender = "male";
	public $price = 50;
}
class tiger{
	public $firstName = "will";
	public $lastName = "wildcat";
	public $gender = "male";
	public $price = 100;
}
	//EXAMPLE:5
	public function myMethod( $argument, $another) {
}
?>
-------------------------------------------------------------------------------------------------------------------------------
<?php
	//EXAMPLE:1
class Cat {
public $firstName;
public $lastName;
public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>breed = $breed;
	}

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
	}
}
class Fish {
public $firstName;
public $lastName;
public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>breed = $breed;
	}

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
	}
}
class Tiger {
public $firstName;
public $lastName;
public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>breed = $breed;
	}

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
	}
}
	//EXAMPLE:2
$cat1 = new Cat(“Tom”, “Smith”, “PersianCat”);
print “Cat 1: {$cat1­>getName()}\n;
$fish1 = new Fish(“Bob”, “Tomas”, “Goldfish”);
print “Fish 1: {$fish1­>getName()}\n;
$tiger1 = new Tiger(“Will”, “Wildcat”, “SiberianTiger”);
print “Tiger 1: {$tiger1­>getName()}\n;
?>
-----------------------------------------------------------------------------------------------------------------------------
<?php
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