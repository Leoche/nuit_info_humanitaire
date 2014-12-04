<?php

$dbase = "nesquick";
$user = "root";
$passwd = "anthony123";

try {
	$bdd = new PDO('mysql:host=localhost; dbase='.$dbase.'', $user, $passwd);
	$bdd->exec("SET CHARACTER SET UTF8");
}
catch(Exception $error) {
	die("Erreur : ".$error->getMessage());
}


?>
