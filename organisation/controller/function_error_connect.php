<?php
/*
 * Auteur : Anthony Bocci
 * Date : 18/11/2014
 * Dans register/controller/function_error_connect.php on aura une fonction qui affichera $_SESSION['error'] a condition que cette derniere existe
 */


/**
 * afficherErreurConnexion va tester l'existence d'une session contenant une erreur lors de la connexion, et afficher cette variable si elle existe.
 * Cette methode sera utile pour simplifier le php de la page register/view/form.php, qui doit contenir le moins de php possible
 */
function afficheErreurConnexion() {
	if ( !empty($_SESSION['error']) )
		echo $_SESSION['error'];
}

?>
