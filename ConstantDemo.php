<?php

class ConstantDemo
{
	const COMPANY = "Skeinsoft"; //constant 
	public $name; //instance variable
}
//:://scope resolution
$person1 = new ConstantDemo;
echo ConstantDemo::COMPANY;
echo $person1::COMPANY;
