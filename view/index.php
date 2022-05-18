<?php 
	define('BASE_URL', $_SERVER['SERVER_NAME'] . '/..' . '/..' . '/');

	//Hiermee laat ik alle classes die ik hierin gebruik
	spl_autoload_register(function ($class_name){
		include_once BASE_URL . 'classes/' . $class_name . '.php';
	});

	$participents = array("player1" => array(new pokemon\Garbodor("Airto van Vugt"), new pokemon\charmeleon("Joey Kwestro"), new pokemon\Slaking("Stefano Verhoeve"), new pokemon\Dragonite("Arnold de Jong"), new pokemon\Wigglytuff("Jan-Willem Huisman"), new pokemon\Golbat("Stijn Dusseldorp")), "player2" => array(new pokemon\Mew("Joran Schrievers"), new pokemon\Pikachu("Patryk Rachańczyk"), new pokemon\Moltres("Sumant Jakhari"), new pokemon\MrMime("Micha van den Bos"), new pokemon\Exeggutor("Luna Akkermans"), new pokemon\Crobat("Sven de Ruijter")));
	$prepareBattle = new Battle\Battle($participents);
	$Battle = $prepareBattle->Battle();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		foreach ($Battle as $value) {
	?>
		<p  style='font-size:30px; font-weight: bold;'>
			<?=$value['sentence']?>
			<?php 
				if (isset($value['image'])) {
			?>
				<img src="<?=BASE_URL?>images/<?=$value['image']?>" alt="<?=$value['alt']?>" style='width:200px'>
			<?php
				}
			?>
		</p>
	<?php 
		}
	?>
</body>
</html>