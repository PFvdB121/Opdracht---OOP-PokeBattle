<?php
	namespace Battle;

	class Battle
	{
		private $sentence;
		private $attack;

		private $participents;
		private $participentsName;

		private $player1 = 0;
		private $player2 = 0;

		function __construct($participents){
			if (is_array($participents)) {
				$this->participentsName = array_keys($participents);
			}
			$this->participents = $participents;
		}

		public function Battle(){
			if (is_array($this->participents)) {
				if (is_array($this->participents[$this->participentsName[0]]) && is_array($this->participents[$this->participentsName[1]])) {
					if (count($this->participents) == 2) {
						if (count($this->participents[$this->participentsName[0]]) > 0 && count($this->participents[$this->participentsName[0]]) <= 6 && count($this->participents[$this->participentsName[1]]) > 0 && count($this->participents[$this->participentsName[1]]) <= 6) {
							$this->player1 = 0;
							$this->player2 = 0;
							$this->sentence = \pokemon\pokemon::getPopulation() . \pokemon\pokemon::getPopulationHealth() . "fight begins <br>" . $this->participents[$this->participentsName[0]][$this->player1]->sendOut($this->participentsName[0]) . $this->participents[$this->participentsName[1]][$this->player2]->sendOut($this->participentsName[1]);
							while (count($this->participents[$this->participentsName[0]]) > $this->player1 && count($this->participents[$this->participentsName[1]]) > $this->player2) {
								while ($this->participents[$this->participentsName[0]][$this->player1]->health > 0 && $this->participents[$this->participentsName[1]][$this->player2]->health > 0) {
									$this->attack = $this->participents[$this->participentsName[0]][$this->player1]->attack();;
									$this->sentence .= $this->attack["sentence"];
									$this->sentence .= $this->participents[$this->participentsName[1]][$this->player2]->damage($this->attack["EnergyType"], $this->attack["damage"]);
									$this->sentence .= \pokemon\pokemon::getPopulationHealth();
									if ($this->participents[$this->participentsName[1]][$this->player2]->health <= 0) {
										$this->player2++;
										if (count($this->participents[$this->participentsName[1]]) > $this->player2) {
											$this->sentence .= $this->participents[$this->participentsName[1]][$this->player2]->sendOut($this->participentsName[1]);
										}
										break;					
									}
									$this->attack = $this->participents[$this->participentsName[1]][$this->player2]->attack();;
									$this->sentence .= $this->attack["sentence"];
									$this->sentence .= $this->participents[$this->participentsName[0]][$this->player1]->damage($this->attack["EnergyType"], $this->attack["damage"]);
									$this->sentence .= \pokemon\pokemon::getPopulationHealth();
									if ($this->participents[$this->participentsName[0]][$this->player1]->health <= 0) {
										$this->player1++;
										if (count($this->participents[$this->participentsName[0]]) > $this->player1) {
											$this->sentence .= $this->participents[$this->participentsName[0]][$this->player1]->sendOut($this->participentsName[0]);
										}
									}
								}
								$this->sentence .= \pokemon\pokemon::getPopulation();
								if (count($this->participents[$this->participentsName[0]]) == $this->player1) {
									$this->sentence .= $this->participentsName[0] . " is defeated.";
								}
								elseif (count($this->participents[$this->participentsName[1]]) == $this->player2) {
									$this->sentence .= $this->participentsName[1] . " is defeated.";
								}
							}
						}
						else{
							$this->sentence = "Elke speler moet minimaal 1 pokemon bezitten, maximaal 6";
						}
					}
					elseif (count($this->participents) > 2) {
						$this->sentence = "Er zijn te veel vechters";
					}
					else{
						$this->sentence = "Er zijn te weining vechters";
					}
				}
				else{
					$this->sentence = "De indexen in de array die je verstuurt moeten ook arrays zijn";
				}
			}
			else{
				$this->sentence = "De variabele in de class moet een array zijn";
			}
			return $this->sentence;
		}
	}
?>