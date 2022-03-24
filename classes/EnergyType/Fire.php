<?php 
	namespace EnergyType;
	
	class Fire extends \pokemon\pokemon
	{
		public $FireResistances = array(["EnergyType" => "Lightning", "reduction" => 10]);
		public $FireWeaknesses = array(["EnergyType" => "Water", "multiplier" => 2.0]);
		
		function __construct($name, $hitpoints, array $attacks, $nickname=""){
			array_push($this->EnergyType, "Fire");
			parent::__construct($name, $hitpoints, $this->FireResistances, $this->FireWeaknesses, $attacks, $nickname);
		}
	}
?>