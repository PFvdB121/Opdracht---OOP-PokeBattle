<?php 
	namespace pokemon;
	
	class Exeggutor extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Grass");
			parent::__construct("Exeggutor", 80, array(new \Resistance\Resistance("Fire", 40)), array(new \Weakness\Weakness("Water", 2.0)), array(new \Attack\Attack("Seed Bomb", 60), new \Attack\Attack("Magical Leaf", 40)), "Exeggutor.png", $nickname);
		}
	}
?>