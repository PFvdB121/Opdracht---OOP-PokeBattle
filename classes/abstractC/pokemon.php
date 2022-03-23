<?php
	namespace abstractC;

	abstract class pokemon
	{
		abstract public function attack();

		abstract protected function weakness_exploit($type, $damage);

		abstract protected function resistance_exploit($type, $damage);
		
		abstract public function damage($type, $damage);
	}
?>