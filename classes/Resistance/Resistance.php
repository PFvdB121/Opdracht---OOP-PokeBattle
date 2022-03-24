<?php 
	namespace Resistance;

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