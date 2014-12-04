<?php

//La fonction qui dira si on est connecte en tant qu'organisation
//Besoin de session_start
function is_connect_organisation() {
	//Retourne vraie si la sessione existe,false sinon
	return (!empty($_SESSION['id_org']));
}

?>
