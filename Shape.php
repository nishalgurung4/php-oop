<?php
// Rules on abstract class:
/*
1. abstract keyword is used to define any class/method as abstract
2. We cannot create object of abstract class.
3. IF method don't have body in it, this method should be defined as abstract
4. If a class contain any abstract method, that class must be declared as abstract
5. If a class extends abstract class then child class must override all the abstract method of that parent abstract class
6. IF a child class of Abstract Parent Class doesn't want to override any of its abastract method, then child class must be define abstract itself.
*/
abstract class  Shape
{
	public $length, $breadth, $height;

	public function area()
	{
		return $this->length * $this->breadth;
	}

	public abstract function perimeter();

	//abstract method
	//those method who don't have body
	public abstract function volume();
}

class Rectangle extends Shape
{
	public function volume()
	{
		echo "Calculating volume of rectangle";
	}

	public function perimeter()
	{
		echo "Calculating perimeter of rectangle";
	}
}

class Square extends Shape
{
	//method overriding
	public function area()
	{
		return $this->length * $this->length;
	}

	public function volume()
	{
		echo "Calculating volume of square";
	}

	public function perimeter()
	{
		echo "Calculating perimter of square";
	}

}

$square = new Square;
$square->length = 5;
echo "Area of Square=".$square->area();
echo "<br />";
$rectangle = new Rectangle;
$rectangle->length = 10;
$rectangle->breadth = 20;
echo "Area of Rectange = ". $rectangle->area();
echo "<br />";
