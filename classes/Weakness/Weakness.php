<?php
	namespace Weakness;

	class Weakness
	{
		public $EnergyType;
		public $Multiplier;

		function __construct($EnergyType, $Multiplier)
		{
			$this->EnergyType = $EnergyType;
			$this->Multiplier = $Multiplier;
		}
	}
?>