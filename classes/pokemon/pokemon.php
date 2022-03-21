<?php 
	namespace pokemon;

	spl_autoload_register(function ($class_name){
		$url = explode('\\', $class_name);
		include_once BASE_URL . 'classes/' . $url[count($url) - 2] . '/' . $url[count($url) - 1] . '.php';
	});

	class pokemon extends \abstractC\pokemon
	{
		public $name;
		public $nickname;
		private $hitpoints;
		private $health;
		public $EnergyType;
		private $chosenAttack;
		private $resistances = array();
		private $weaknesses = array();
		private $attacks = array();
		


		public function __construct($name, $hitpoints, $EnergyType, array $resistances, array $weaknesses, array $attacks, $nickname="")
		{
			$this->name = $name;
			if ($nickname == "") {
				$this->nickname = $name;
			}
			else{
				$this->nickname = $nickname;
			}
			$this->hitpoints = $hitpoints;
			$this->health->$hitpoints;
			$this->EnergyType = $EnergyType;
			foreach ($resistances as $value) {
				array_push($this->resistances, $value);
			}
			foreach ($weaknesses as $value) {
				array_push($this->weaknesses, $value);
			}
			foreach ($attacks as $value) {
				array_push($this->attacks, $value);
			}
		}

		public function attack(){
			$this->chosenAttack = rand(0, (count($this->attacks) - 1));
			echo $name . " used " . $attacks[$this->chosenAttack]["name"];
			return $attacks[$this->chosenAttack];
		}

		private function weakness_exploit($type, $damage)
		{
			foreach ($weaknesses as $value) {
				if ($value["EnergyType"] = $type) {
					$damage *= $value["multiplier"];
				}
			}
			return $damage;
		}

		private function resistance_exploit($type, $damage)
		{
			foreach ($resistance as $value) {
				if ($value["EnergyType"] = $type) {
					$damage -= $value["reduction"];
				}
			}
			return $damage;
		}

		public function damage($damage){
			$this->health -= $damage;
			if ($this->health < 0) {
				$this->health = 0;
			}
			echo $name . " took " . $damage . " damage. <br>" . $name . " has " . $health . "hp left. <br>";
		}
	}
?>