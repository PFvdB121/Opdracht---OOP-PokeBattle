<?php 
	namespace pokemon;
	
	class Crobat extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Flying");
			parent::__construct("Crobat", 70, array(new \Resistance\Resistance("Grass", 30)), array(new \Weakness\Weakness("Rock", 2)), array(new \Attack\Attack("Hurricane", 80), new \Attack\Attack("Air Pressure", 50)), "Crobat.PNG", $nickname);
		}
	}
?>