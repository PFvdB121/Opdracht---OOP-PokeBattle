<?php 
	namespace pokemon;
	
	class Dragonite extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Dragon");
			parent::__construct("Dragonite", 120, array(new \Resistance\Resistance("Normal", 50)), array(new \Weakness\Weakness("Fairy", 3.0)), array(new \Attack\Attack("Draco Meteor", 100), new \Attack\Attack("Outrage", 80)), "Dragonite.png", $nickname);
		}
	}
?>