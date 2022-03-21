<?php 
	namespace EnergyType;
	
	class Fire extends \pokemon\pokemon
	{
		public $FireResistances = array(["EnergyType" => "Lightning", "reduction" => 20]);
		public $FireWeaknesses = array(["EnergyType" => "Water", "multiplier" => 2.0]);
		
		function __construct($name, $hitpoints, array $attacks, $nickname=""){
			parent::__construct($name, $hitpoints, "Fire", $this->FireResistances, $this->FireWeaknesses, $attacks);
		}
	}
?>