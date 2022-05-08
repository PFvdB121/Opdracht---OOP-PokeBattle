<?php 
	namespace pokemon;
	
	//De pokemon Pikachu wordt aangemaakt
	class Pikachu extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Lightning");
			parent::__construct("Pikachu", 60, array(new \Resistance\Resistance("Fighting", 20)), array(new \Weakness\Weakness("Fire", 1.5)), array(new \Attack\Attack("Electric Ring", 50), new \Attack\Attack("Pika Punch", 20)), "Pikachu.PNG", $nickname);
		}
	}
?>