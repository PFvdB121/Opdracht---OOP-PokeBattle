<?php 
	namespace pokemon;
	
	class Moltres extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Fire");
			parent::__construct("Moltres", 80, array(new \Resistance\Resistance("Psychic", 50)), array(new \Weakness\Weakness("Normal", 2.5)), array(new \Attack\Attack("Blue Fire", 150), new \Attack\Attack("Flamethrower", 90)), "Moltres.png", $nickname);
		}
	}
?>