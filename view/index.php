<?php 
	define('BASE_URL', $_SERVER['SERVER_NAME'] . '/..' . '/..' . '/');

	$url;

	spl_autoload_register(function ($class_name){
		$url = explode('\\', $class_name);
		include_once BASE_URL . 'classes/' . $url[count($url) - 2] . '/' . $url[count($url) - 1] . '.php';
	});

	$Joey = new pokemon\charmeleon("Joey");
?>