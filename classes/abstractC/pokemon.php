<?php
	namespace abstractC;

	abstract class pokemon
	{
		abstract public function attack();

		abstract protected function weakness_exploit($EnergyType, $damage);

		abstract protected function resistance_defence($EnergyType, $damage);
		
		abstract public function damage($EnergyType, $damage);
	}
?>