<?php
//lecture 4: Example 1 
/* class Animal{
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
		$this->scientificname = $scientificName;
		$this->firstname = $firstName;
		$this->lastname = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
	}
	function getname() {
	return "This is my" .$this->firstName . 
			"and last" .$this->lastName;
	}
}
class Cat extends Animal {
		function greet() {
		return $this->meow;
		}
}
class Dog extends Animal {
		function hello() {
		return $this->bark;
		}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15);
print "Animal 1 is a" .$cat->getName(); */
?>
_______________________________________________________________________________________________________________________________
<?php //lecture 5: Example 1
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
	}

	function getName() {
		return "This is my" .$this->$firstName .
				"and last" .$this->$lastName .
				"and this is my scientific-name" .$this->$scientificName .".";
		}
}
/**
* 
*/
class Cat extends Animal{
	
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->meow = $meow;
	}
	function greet() {
	return $this->meow;
	}
}

class Dog extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark) {
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->bark = $bark;
	}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
print "Animal 1 is a" .$cat->getName();

//Example 2
class Car {
	public $color;
	public $catagory;
	public $carMaker;

	function __construct($color, $catagory, $carMaker) {
		$this->scientificName = $color;
		$this->firstName = $catagory;
		$this->lastName = $carMaker;
	}

	function getName() {
		return "This car's color is" .$this->$color .
				"and catagory is" .$this->$catagory .
				"and this is its make" .$this->$carMaker .".";
		}
}
/**
* 
*/
class Cat extends Animal{
	
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->meow = $meow;
	}
	function greet() {
	return $this->meow;
	}
}

class Dog extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark) {
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->bark = $bark;
	}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
print "Animal 1 is a" .$cat->getName();
?>