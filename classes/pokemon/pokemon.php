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
		public $health;
		protected $EnergyType;
		private $chosenAttack;
		private $resistances = array();
		private $weaknesses = array();
		private $attacks = array();
		


		public function __construct($name, $hitpoints, array $resistances, array $weaknesses, array $attacks, $nickname="")
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
			return array("name" => $this->attacks[$this->chosenAttack]->name, "damage" => $this->attacks[$this->chosenAttack]->damage, "EnergyType" => $this->EnergyType->EnergyType, "sentence" => $this->nickname . " used " . $this->attacks[$this->chosenAttack]->name . ". <br>");
		}

		protected function weakness_exploit($EnergyType, $damage)
		{
			foreach ($this->weaknesses as $value) {
				if (strtoupper($value->EnergyType->EnergyType) == strtoupper($EnergyType)) {
					$damage *= $value->Multiplier;
				}
			}
			return $damage;
		}

		protected function resistance_defence($EnergyType, $damage)
		{
			foreach ($this->resistances as $value) {
				if (strtoupper($value->EnergyType) == strtoupper($EnergyType)) {
					$damage -= $value->Reduction;
				}
			}
			return $damage;
		}

		public function damage($EnergyType, $damage){
			$damage = $this->weakness_exploit($EnergyType, $damage);
			$damage = $this->resistance_defence($EnergyType, $damage);
			$this->health -= $damage;
			if ($this->health < 0) {
				$this->health = 0;
			}
			return $this->nickname . " took " . $damage . " damage. <br>" . $this->nickname . " has " . $this->health . "hp left. <br>";
		}
	}
?>