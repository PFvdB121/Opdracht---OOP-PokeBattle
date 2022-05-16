<?php 
	namespace pokemon;

	//In deze class worden de pokemon aangemaakt
	class pokemon extends \abstractC\pokemon
	{
		private $name;
		private $nickname;

		// private $nickname;
		// public function getNickname() {
		// 	return $this->nickname;
		// }

		// public function setNickname($nickname) {
		// 	$this->nickname = $nickname;
		// }

		private $hitpoints;
		private $health;
		protected $EnergyType;
		private $chosenAttack;
		private $resistances = array();
		private $weaknesses = array();
		private $attacks = array();
		private $image;
		private $sentence;
		private static $population = 0;
		private static $totalHealthPopulation = 0;
		private static $populationHealth;

		//Wanneer de class wordt aangeroepen, worden alle informatie tussen de haakjes in de class geplaatst, wordt private static $population met 1 verhoogt, en wordt private static $totalHealthPopulation verhoogt met de hoeveelheid hitpoints van de aangeroepen pokemon
		public function __construct($name, $hitpoints, array $resistances, array $weaknesses, array $attacks, $image, $nickname="")
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
			pokemon::$population++;
			pokemon::$totalHealthPopulation += $hitpoints;
			foreach ($resistances as $value) {
				array_push($this->resistances, $value);
			}
			foreach ($weaknesses as $value) {
				array_push($this->weaknesses, $value);
			}
			foreach ($attacks as $value) {
				array_push($this->attacks, $value);
			}
			$this->image = $image;
		}

		//Er wordt aangegeven dat er een pokemon eruit wordt gezonden
		public function sendOut($player){
			return $player . " send out " . $this->nickname . " <img src=' " . BASE_URL .  "images/" . $this->image . "' alt='" . $this->name  . "' style='width:100px'>. <br>";
		}

		public function getName(){
			return $this->name;
		}

		//Een willekeurige aanval van de pokemon wordt gekozen, die die dan gebruikt
		public function attack(){
			$this->chosenAttack = rand(0, (count($this->attacks) - 1));
			return array("name" => $this->attacks[$this->chosenAttack]->getName(), "damage" => $this->attacks[$this->chosenAttack]->getDamage(), "EnergyType" => $this->EnergyType->getEnergyType(), "sentence" => $this->nickname . " used " . $this->attacks[$this->chosenAttack]->getName() . " <img src=' " . BASE_URL .  "images/" . $this->image . "' alt='" . $this->name  . "' style='width:100px'>. <br>");
		}

		//Er wordt gekeken of de EnergyType van de aanval waarmee deze pokemon wordt aangevallen onder één van zijn zwaktes valt. Als dat het geval is, dan wordt de schade vermedigvuldigt gebaseerd op het getal dat in $this-weaknesses staat in Multiplier. Deze functie kan alleen in deze class en zijn child classes worden gebruikt.
		protected function weakness_exploit($EnergyType, $damage)
		{
			foreach ($this->weaknesses as $value) {
				if (strtoupper($value->getEnergyType()) == strtoupper($EnergyType)) {
					$damage *= $value->getMultiplier();
				}
			}
			return $damage;
		}

		//Er wordt gekeken of de EnergyType van de aanval waarmee deze pokemon wordt aangevallen onder één van zijn resistances valt. Als dat het geval is, dan wordt de schade verminderd gebaseerd op het getal dat in $this-resistances staat in Reduction. Deze functie kan alleen in deze class en zijn child classes worden gebruikt.
		protected function resistance_defence($EnergyType, $damage)
		{
			foreach ($this->resistances as $value) {
				if (strtoupper($value->getEnergyType()) == strtoupper($EnergyType)) {
					$damage -= $value->getReduction();
					if ($damage<0) {
						$damage = 0;
					}
				}
			}
			return $damage;
		}

		//Met deze functie wordt er berekend hoeveel schade deze pokemon krijgt, met hoeveel de totale health is van alle pokemon wordt verminderd, en er wordt een zin gereturned dat aangeeft hoeveel schade de pokemon had genomen
		public function damage($EnergyType, $damage){
			if ($this->health>0) {
				$damage = $this->weakness_exploit($EnergyType, $damage);
				$damage = $this->resistance_defence($EnergyType, $damage);
				$this->health -= $damage;
				pokemon::$totalHealthPopulation -= $damage;
				$this->sentence = $this->nickname . " took " . $damage . " damage. <br>";
				if ($this->health < 0) {
					pokemon::$totalHealthPopulation -= $this->health;
					$this->health = 0;
				}
				$this->sentence .= $this->nickname . " has " . $this->health . "hp left <img src=' " . BASE_URL .  "images/" . $this->image . "' alt='" . $this->name . "' style='width:100px'>. <br>";
				$this->defeated();
			}
			else{
				$this->sentence = $this->nickname . " is already defeated <br>";
			}
			return $this->sentence;
		}

		//Hierin wordt er gekeken of de pokemon verslagen is
		protected function defeated(){
			if ($this->health <= 0) {
				pokemon::$population--;
				$this->sentence.= $this->nickname ." is defeated. <br>";
			}
		}

		public function getHealth(){
			return $this->health;
		}

		public function getImage(){
			return $this->image;
		}

		public function getNickname(){
			return $this->nickname;
		}

		//Hierin wordt er gekeken hoeveel pokemon er over zijn
		public static function getPopulation(){
			return "There are " . pokemon::$population . " pokemon left <br>";
		}

		//Hierin wordt er gekeken wat de gemiddelde hoeveelheid health van alle pokemon zijn
		public static function getPopulationHealth(){
			pokemon::$populationHealth = pokemon::$totalHealthPopulation / pokemon::$population;
			return "The average amount of health is " . round(pokemon::$populationHealth) . "<br>";
		}
	}
?>