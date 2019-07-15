<?php

/*
Rules of Interface
1. Interface is not a class so we cannot create object of an interface
2. Interface must contain abstract method only. If any of its method have body then it is error.
3. As all method are abstract, we cannot define abstract method with abstract keyword.
4. Interface cannot contain instance variable.
5. Interface can only contain  Constant value.
6. All the members of interface(Constant and methods) must be public.
7. ANy other class can implements more than one Interface
*/

interface Shape
{
	public const NAME="SHAPE";
	public  function area();


}

interface Geometry
{
	public function rotate();
}

class Circle implements Shape, Geometry
{
	public function area()
	{
		echo "Area";
	}

	public function rotate()
	{
		echo "Rotating";
	}

}