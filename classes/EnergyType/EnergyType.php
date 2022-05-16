<?php 
	namespace EnergyType;

	//Hierin maak ik de EnergyTypes voor de pokemon
	class EnergyType
	{
		private $EnergyType;

		function __construct($EnergyType)
		{
			$this->EnergyType = $EnergyType;
		}

		public function getEnergyType(){
			return $this->EnergyType;
		}
	}
?>