<?php
/*
 * Auteur : Anthony Bocci
 * Date : 16/11/2014
 * Ici on aura la fonction permettant d'inclure une page de facon securisee, pour le MVC
 */

/**
 * inclusion_page va inclure de facon securisee une page, en evitant les failles.
 * @param $chemin le chemin de la page qu'on veut inclure, sous la forme "module-page"
 */
function inclusion_page($chemin) {
	//S'il n'y a pas de page a inclure, on inclue une page par defaut
	if ( empty($chemin) ){
		include_once ("accueil.php");
	}
	else{ //Sinon on remplace les - par des /
		$chemin = url_propre($chemin);
		//Le premier -  a ete remplace par un /
		$cheminExplode = explode("/", $chemin);
		//On va maintenant rajouter le "controller" entre les deux morceaux
		$cheminPropre = $cheminExplode[0]."/controller/".$cheminExplode[1];

		//On verifie s'il est possible d'inclure la page, et on l'inclue si on peut. Sinon on renvoie vers l'index
		if ( @include_once($cheminPropre.".php") )
			include_once($cheminPropre.'.php');
		else {
			header('Location: ./index.php');
			exit();
		}
	}
}
?>
