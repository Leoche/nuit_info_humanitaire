<?php
/* Auteur : Anthony Bocci
 * Dans controller/common/url_propre on aura la fonction qui nous retournera le nom d'une page correctement ecrite
 */
 
 
 /**
  * url_propre va parcourir notre parametre GET['page'] et remplacer le premier - par un /
  * @param $url le parametre que l'on veut modifier
  * @return $url le parametre une fois modifie
  * @author Anthony Bocci
  */
 function url_propre($url) {

 

/* On parcourt la chaine de caracteres, et des qu'on trouve un tiret on le remplace par un slash puis on renvoie la chaine */ 
 for ( $i = 0; $i < strlen($url); $i++ ) {
	if ( $url[$i] == '-' ) {
		$url[$i] = '/';
		return $url;
	}
 }
 
 return $url;
 
 
 }
 
 
 
 
 


?>
