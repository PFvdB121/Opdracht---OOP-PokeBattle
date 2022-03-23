<?php 
	namespace pokemon;

	spl_autoload_register(function ($class_name){
		$url = explode('\\', $class_name);
		include_once BASE_URL . 'classes/' . $url[count($url) - 2] . '/' . $url[count($url) - 1] . '.php';
	});

	class pokemon extends \abstractC\pokemon
	{
		private $name;
		public $nickname;
		private $hitpoints;
		private $health;
		private $EnergyType;
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
			$this->health = $hitpoints;
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
			echo $this->nickname . " used " . $this->attacks[$this->chosenAttack]["name"] . ". <br>";
			return $this->attacks[$this->chosenAttack];
		}

		private function weakness_exploit($type, $damage)
		{
			foreach ($this->weaknesses as $value) {
				if (strtoupper($value["EnergyType"]) == strtoupper($type)) {
					$damage *= $value["multiplier"];
				}
			}
			return $damage;
		}

		private function resistance_exploit($type, $damage)
		{
			foreach ($this->resistances as $value) {
				if (strtoupper($value["EnergyType"]) == strtoupper($type)) {
					$damage -= $value["reduction"];
				}
			}
			return $damage;
		}

		public function damage($type, $damage){
			$damage = $this->weakness_exploit($type, $damage);
			$damage = $this->resistance_exploit($type, $damage);
			$this->health -= $damage;
			if ($this->health < 0) {
				$this->health = 0;
			}
			echo $this->nickname . " took " . $damage . " damage. <br>" . $this->nickname . " has " . $this->health . "hp left. <br>";
		}
	}
?>