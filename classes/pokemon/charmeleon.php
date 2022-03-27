<?php 
	namespace pokemon;
	
	class charmeleon extends \pokemon\pokemon
	{
		function __construct($nickname=""){
			$this->EnergyType = new \EnergyType\EnergyType("Fire");
			parent::__construct("Charmeleon", 60, array(new \Resistance\Resistance("Lightning", 10)), array(new \Weakness\Weakness("Water", 2)), array(new \Attack\Attack("Flare", 30), new \Attack\Attack("Head Butt", 10)), "Charmeleon.PNG", $nickname);
		}
	}
?>