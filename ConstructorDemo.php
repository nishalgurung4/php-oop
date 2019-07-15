<?php

class ConstructorDemo
{
	public $name;
	//constructor are those method which are automatically called when object is created
	//in php __construct() is used to create constructor
	public function __construct($name) //constructor
	{
		$this->name = $name;
	}
	public function setName()
	{
		$this->name = "Nishal";
	}
	//destructor
	function __destruct() {
        print "Destroying ";;
    }
}
// $obj1 = new ConstructorDemo;
$obj = new ConstructorDemo("Nishal");
$obj2 = new ConstructorDemo("Ritesh");

var_dump($obj);
var_dump($obj2);
