<?php

$dbase = "nuit_info_humanitaire";
$user = "root";
$passwd = "";

try {
	$bdd = new PDO('mysql:host=localhost; dbase='.$dbase.'', $user, $passwd);
	$bdd->exec("SET CHARACTER SET UTF8");
}
catch(Exception $error) {
	die("Erreur : ".$error->getMessage());
}


?>
