<?php
	namespace Attack;

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