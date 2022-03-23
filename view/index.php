<?php 
	define('BASE_URL', $_SERVER['SERVER_NAME'] . '/..' . '/..' . '/');

	$url;

	spl_autoload_register(function ($class_name){
		$url = explode('\\', $class_name);
		include_once BASE_URL . 'classes/' . $url[count($url) - 2] . '/' . $url[count($url) - 1] . '.php';
	});

	$Charmeleon = new pokemon\charmeleon();
	$Pikachu = new pokemon\Pikachu();

	$vars = get_defined_vars();

	foreach ($vars as $key => $value) {
		if (!isset($$key->health) || $$key->health <= 0) {
			unset($vars[$key]);
			continue;
		}
	}
?>