<?php 
	class pokemon
	{
		public $name;
		public $hitpoints;
		public $health = $hitpoints;
		function __construct($name, $hitpoints)
		{
			$this->name = $name;
			$this->hitpoints = $hitpoints;
		}
	}
?>