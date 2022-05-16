<?php
	namespace abstractC;

	//Hierin wordt de blauwdruk van de class pokemon gemaakt
	abstract class pokemon
	{
		abstract public function sendOut($player);

		abstract public function attack();

		abstract protected function weakness_exploit($EnergyType, $damage);

		abstract protected function resistance_defence($EnergyType, $damage);
		
		abstract public function damage($EnergyType, $damage);

		abstract protected function defeated();

		abstract public function getHealth();
	}
?>