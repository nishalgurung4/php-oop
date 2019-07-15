<?php

class Parent1
{
	public $name;
}

class Parent2
{
	public $age;
}
//not accepted or supported in php/java but is supported  in C++
class ChildClass extends Parent1 ,Parent2
{

}