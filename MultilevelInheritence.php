<?php

class Class1
{
	public $name;

	public function method1()
	{
		echo "In Class1, method1";
	}
}

class Class2 extends Class1
{
	public $age;
}

class Class3 extends Class2
{

}
$obj = new Class3;
$obj->method1();
var_dump(new Class3);