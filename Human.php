<?php

class Human
{
	public $nickName, $isBlind;

	public function makeBlind()
	{
		$this->isBlind = true;

	}

	public function checkBlindness()
	{
		if ($this->isBlind == true) {
			return "Blind";
		} 
			return "Not Blind";
	}
}


$ajay = new Human;
$ajay->nickName = "Dalley";
$ajay->makeBlind();


$rabi = new Human;
$rabi->nickName = "Lambu";

$sita = new Human;
$sita->nickName = "Kali";
$sita->makeBlind();


echo "Sita is ".$sita->checkBlindness();