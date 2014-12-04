<?php
/*
 * Dans benevoles/controller/function_is_connect.php on aura le fonction qui dira si un benevole est connecte ou non
 */
 
 function is_connect_benevole() {
	 return (!empty($_SESSION['ID_Benevole']));
 }

?>
