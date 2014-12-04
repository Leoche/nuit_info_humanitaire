<?php
/*
 * Auteur : Anthony Bocci
 * Date : 25/11/2014
 * Dans register/controller/form_register.php on aura les traitements necessaires avant d'inclure le formulaire d'inscription
 */
 
 
 //Si l'utilisateur est connecte alors on le renverra vers la page d'accueil
require_once('organisation/controller/function_is_connect.php');

require_once('organisation/controller/function_error_connect.php');
	include('common/afficherErreurPhp.php');
	include('organisation/model/insertion_user.php');


//S'il n'est pas connecte
if ( !is_connect() ) {
	//Si l'inclusion est possible on le fait, sinon on renvoie vers la page d'accueil
	if ( @require_once('organisation/view/form_register.php') ) {
		require_once('organisation/view/form_register.php');
		//S'il y a des erreurs, on les supprime puisqu'elles auront ete affiche dans le fichier inclu au dessus
		if ( isset($_SESSION['error']) ) {
			unset($_SESSION['error']);
		}
	}
	else { //S'il y a un probleme a l'inclusion de la page on renvoie vers la page d'idex
		header('Location: ./');
		exit();
	}

} else {//On renvoie vers l'accueil si l'user est deja connecte
	header('Location: ./');
	exit();
}
 
 
?>
