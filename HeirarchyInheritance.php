<?php

class ParentClass
{
	public $name;
}

Class ChildClass1 extends ParentClass
{

}

class ChildClass2 extends ParentClass
{

}

var_dump(new ChildClass2);
var_dump(new ChildClass1);
