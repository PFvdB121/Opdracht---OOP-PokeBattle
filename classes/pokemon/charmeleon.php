<?php 
	namespace pokemon;
	
	class charmeleon extends \EnergyType\Fire
	{
		public $charmeleonAttacks = array(['name' => "Head Butt", 'EnergyType' => "Normal", 'damage' => 10], ['name' => "Flare", 'EnergyType' => "Fire", 'damage' => 30]);
		
		function __construct($nickname=""){
			parent::__construct("charmeleon", 60, $this->charmeleonAttacks, $nickname);
		}
	}
?>