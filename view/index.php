<?php 
	define('BASE_URL', $_SERVER['SERVER_NAME'] . '/..' . '/..' . '/');

	$url;

	spl_autoload_register(function ($class_name){
		$url = explode('\\', $class_name);
		include_once BASE_URL . 'classes/' . $url[count($url) - 2] . '/' . $url[count($url) - 1] . '.php';
	});

	$Charmeleon = new pokemon\charmeleon();
	$Pikachu = new pokemon\Pikachu();
	$attack = $Pikachu->attack();
	echo $attack["sentence"];
	echo $Charmeleon->damage($attack["EnergyType"], $attack["damage"]);
	echo $attack["sentence"];
	echo $Charmeleon->damage($attack["EnergyType"], $attack["damage"]);

	
?>