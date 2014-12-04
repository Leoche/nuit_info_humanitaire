<?php
/*
 * Auteur : Anthony Bocci
 * Date : 25/11/2014
 * Dans register/view/form_register.php on aura le formulaire d'inscription
 */
?>
<div>
	
	<?php afficheErreurConnexion();//On affiche le potentiel message d'erreur ?>
	

	<!--Formulaire de connexion-->

	<form method="post" action="organisation/controller/valid_form_register.php">
		<label>Prénom :</label><input type="text" name="prenom" id="prenom"/><br />
		<label>Nom :</label><input type="text" name="nom" id="nom" /><br />
		<label>Email :</label><input type="email" name="mail" id="mail" /><br />
		
		
		<input type="submit" value="Valider" />
	</form>
	
	
</div>
