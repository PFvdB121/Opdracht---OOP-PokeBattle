<?php 
	namespace pokemon;
	
	class Pikachu extends \EnergyType\Lightning
	{
		public $PikachuAttacks = array(['name' => "Electric Ring", 'EnergyType' => "Lightning", 'damage' => 50], ['name' => "Pika Punch", 'EnergyType' => "Fightning", 'damage' => 20]);
		
		function __construct($nickname=""){
			parent::__construct("Pikachu", 60, $this->PikachuAttacks, $nickname);
		}
	}
?>