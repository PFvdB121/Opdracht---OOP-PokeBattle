<?php 
	namespace Resistance;

	//Met deze class geef ik de pokemon resistances
	class Resistance
	{
		public $EnergyType;
		public $Reduction;

		function __construct($EnergyType, $Reduction)
		{
			$this->EnergyType = $EnergyType;
			$this->Reduction = $Reduction;
		}
	}
?>