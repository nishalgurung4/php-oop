<?php

class Task
{
	public $name, $isComplete;

	public function setName($name)
	{
		
	}

	public function getName()
	{

	}

	public function displayName()
	{
		echo "displaying";
	}
}

$task1 = new Task;
$task1->name = "Go to the market";
$task1->isComplete = true;
echo $task1->name;
echo $task1->isComplete;
$task1->displayName();