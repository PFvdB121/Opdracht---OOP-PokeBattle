<?php 
	namespace EnergyType;

	//Hierin maak ik de EnergyTypes voor de pokemon
	class EnergyType
	{
		public $EnergyType;

		function __construct($EnergyType)
		{
			$this->EnergyType = $EnergyType;
		}
	}
?>