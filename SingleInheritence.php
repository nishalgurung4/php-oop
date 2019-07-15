<?php
//visibility: we have 3 level of visibility
//private: only visible within a defined class
//protected: only visible within a defined class and its child class
//public : visible everywhere
class ParentClass
{
	public $name;
}

// $p = new ParentClass;
// $p->name = "Nihsal";
// echo $p->name;
class ChildClass extends ParentClass
{

}
// $c = new ChildClass;
// $c->name = "Nishal";
// echo $c->name;

var_dump(new ChildClass);