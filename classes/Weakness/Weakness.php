<?php
	namespace Weakness;

	//Hiermee geef ik de pokemon zwaktes
	class Weakness
	{
		private $EnergyType;
		private $Multiplier;

		function __construct($EnergyType, $Multiplier)
		{
			$this->EnergyType = $EnergyType;
			$this->Multiplier = $Multiplier;
		}

		public function getEnergyType(){
			return $this->EnergyType;
		}

		public function getMultiplier(){
			return $this->Multiplier;
		}
	}
?>