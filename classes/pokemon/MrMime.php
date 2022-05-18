<?php 
	namespace pokemon;
	
	//De pokemon MrMime wordt aangemaakt
	class MrMime extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Psychic");
			parent::__construct("MrMime", 80, array(new \Resistance\Resistance("Flying", 20)), array(new \Weakness\Weakness("Dark", 2.0)), array(new \Attack\Attack("Psychic Beam", 70), new \Attack\Attack("Confusion", 40)), "MrMime.png", $nickname);
		}
	}
?>