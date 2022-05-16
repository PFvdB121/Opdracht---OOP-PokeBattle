<?php
	namespace Attack;

	//Hierin maak ik de aanvallen voor de pokemon

	class Attack
	{
		private $name;
		private $damage;

		function __construct($name, $damage)
		{
			$this->name = $name;
			$this->damage = $damage;
		}

		public function getName(){
			return $this->name;
		}

		public function getDamage(){
			return $this->damage;
		}
	}
?>