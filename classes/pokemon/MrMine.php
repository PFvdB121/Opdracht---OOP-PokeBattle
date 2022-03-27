<?php 
	namespace pokemon;
	
	class MrMine extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Psychic");
			parent::__construct("MrMine", 80, array(new \Resistance\Resistance("Flying", 20)), array(new \Weakness\Weakness("Dark", 2.0)), array(new \Attack\Attack("Psychic Beam", 70), new \Attack\Attack("Confusion", 40)), "MrMine.png", $nickname);
		}
	}
?>