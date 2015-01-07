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
?>