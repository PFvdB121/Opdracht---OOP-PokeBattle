<?php 
	namespace pokemon;
	
	//De pokemon Slaking wordt aangemaakt
	class Slaking extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Normal");
			parent::__construct("Slaking", 1000, array(new \Resistance\Resistance("Ground", 200)), array(new \Weakness\Weakness("Dragon", 1.5)), array(new \Attack\Attack("Giga Impact", 400), new \Attack\Attack("Sleeping", 0), new \Attack\Attack("Doing Nothing", 0), new \Attack\Attack("Being Lazy", 0)), "Slaking.png", $nickname);
		}
	}
?>