<?php
//lecture 4: Example 1
class Animal{
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
print "Animal 1 is a" .$cat->getName();
?>