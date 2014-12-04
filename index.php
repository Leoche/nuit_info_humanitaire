<?php
session_start();
/*
 * Auteur : Anthony Bocci
 * Date : 16/11/2014
 * Ici on a la page d'index d'un site, on inclue les fichiers dont ont depend et on inclue ensuite la vue de cette page
 */

//S'il n'y a pas le parametre page, on l'initialise a "" pour que la cas soit gere dans la methode function_inclusion_page
if ( empty($_GET['page']) ) {
		$_GET['page'] = "";
}

include('common/afficherErreurPhp.php');
require_once('common/function_inclusion_page.php');
require_once('common/url_propre.php');
require_once('common/connexion_bdd.php');



require_once('index_view.php');

?>
