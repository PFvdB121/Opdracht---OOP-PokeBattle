<?php
	namespace Attack;

	//Hierin maak ik de aanvallen voor de pokemon

	class Attack
	{
		public $name;
		public $damage;
		function __construct($name, $damage)
		{
			$this->name = $name;
			$this->damage = $damage;
		}
	}
?>