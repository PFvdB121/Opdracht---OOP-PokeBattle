<?php
	namespace Weakness;

	//Hiermee geef ik de pokemon zwaktes
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