<?php

class Animal
{
	//property or instance variable
	public $name;
	public $color;

	public function eat($food)
	{
		echo $food;
	}
}

//$obj is an object of Animal class type
$dog = new Animal;
$dog->name = "Jublie";
$dog->color = "black";
$dog->eat("bones");

$cat = new Animal;
$cat->name = "suri";
$cat->color = "brown";
$cat->eat("milk");

var_dump($dog);

var_dump($cat);




?>