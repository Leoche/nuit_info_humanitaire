<?php
/*
 * Auteur : Anthony Bocci
 * Date : 16/11/2014
 * Dans register/controller/function_is_connect.php on aura le fonction qui nous dira si l'utilisateur est connecte ou non
 */
 
 /**
  * is_connect nous dit si l'utilisateur est connecte ou non
  * @return true si l'utilisateur est connecte, false sinon
  */
 function is_connect() {
	 return isset($_SESSION['login']);
 }



?>
