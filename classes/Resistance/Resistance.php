<?php 
	namespace Resistance;

	//Met deze class geef ik de pokemon resistances
	class Resistance
	{
		private $EnergyType;
		private $Reduction;

		function __construct($EnergyType, $Reduction)
		{
			$this->EnergyType = $EnergyType;
			$this->Reduction = $Reduction;
		}

		public function getEnergyType(){
			return $this->EnergyType;
		}

		public function getReduction(){
			return $this->Reduction;
		}
	}
?>