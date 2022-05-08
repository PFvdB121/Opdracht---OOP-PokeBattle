<?php 
	namespace pokemon;
	
	//De pokemon Wigglytuff wordt aangemaakt
	class Wigglytuff extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Fairy");
			parent::__construct("Wigglytuff", 90, array(new \Resistance\Resistance("Dragon", 4000)), array(new \Weakness\Weakness("Normal", 3.0)), array(new \Attack\Attack("Light of Ruin", 100), new \Attack\Attack("Play Rough", 70)), "Wigglytuff.png", $nickname);
		}
	}
?>