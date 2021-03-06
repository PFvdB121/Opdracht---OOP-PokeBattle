<?php 
	namespace EnergyType;
	
	class Lightning extends \pokemon\pokemon
	{
		public $LightningResistances = array(["EnergyType" => "Fighting", "reduction" => 20]);
		public $LightningWeaknesses = array(["EnergyType" => "Fire", "multiplier" => 1.5]);
		
		function __construct($name, $hitpoints, array $attacks, $nickname=""){
			array_push($this->EnergyType, "Lightning");
			parent::__construct($name, $hitpoints, $this->LightningResistances, $this->LightningWeaknesses, $attacks);
		}
	}
?>