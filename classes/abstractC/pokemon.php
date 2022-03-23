<?php
	namespace abstractC;

	abstract class pokemon
	{
		abstract public function attack();
		
		abstract public function damage($type, $damage);
	}
?>