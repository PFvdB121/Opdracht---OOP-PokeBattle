<?php 
	namespace pokemon;
	
	class Golbat extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Flying");
			parent::__construct("Golbat", 50, array(new \Resistance\Resistance("Ground", 200)), array(new \Weakness\Weakness("Rock", 1.5)), array(new \Attack\Attack("Cross Poison", 100), new \Attack\Attack("Poison Fang", 70)), "Golbat.png", $nickname);
		}
	}
?>