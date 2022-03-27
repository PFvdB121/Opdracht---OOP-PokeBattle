<?php 
	namespace pokemon;
	
	class Garbodor extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Lightning");
			parent::__construct("Garbodor", 100, array(new \Resistance\Resistance("Fairy", 50)), array(new \Weakness\Weakness("Psychic", 3.0)), array(new \Attack\Attack("Gunk Shot", 70), new \Attack\Attack("Poison Gas", 10)), "Garbodor.jpg", $nickname);
		}
	}
?>