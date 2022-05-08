<?php 
	namespace pokemon;
	
	//De pokemon Mew wordt aangemaakt
	class Mew extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Psychic");
			parent::__construct("Mew", 120, array(new \Resistance\Resistance("Fighting", 40)), array(new \Weakness\Weakness("Dark", 1.5)), array(new \Attack\Attack("Psycho Cut", 80), new \Attack\Attack("Psychic", 50)), "Mew.PNG", $nickname);
		}
	}
?>