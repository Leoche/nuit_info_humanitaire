<?php
/*
 * Auteur : Anthony Bocci
 * Date : 25/11/2014
 * Dans register/model/insertion_user.php on va inserer un utilisateur dans la base de donnees
 */
 
 
 /**
  * insertion_user va enregister un utilisateur dans la base de donnees
  * @param $table la table ou seront inserees les informations des utilisateurs
  * @param $arrayColumnNames un tableau numerote contenant les noms des colonnes dans la table
  * @param $arrayValues un tableau numerote contenant les valeurs qui doivent etre inserees dans la table
  * @return true si la requete s'est passee correctement, false s'il y a eu une erreur
  */
 function insertion_user($database, $table, $arrayColumnNames, $arrayValues) {
	 
	 //Si l'un des deux n'est pas un tableau ou que les deux tableaux n'ont pas la meme taille il y a un probleme
	 if (!is_array($arrayColumnNames) || !is_array($arrayValues) || count($arrayColumnNames) != count($arrayValues) )
		return false;
		
	 global $bdd;
	 $sizeArrays = count($arrayValues); //Les deux tableaux ont la meme taille, on l'enregistre elle ne varie pas
	 $requete = "
	 INSERT INTO {$database}.{$table}
	 (";
	 //On parcourt tout le tableau pour preciser dans quelles colonnes on va inserer 
	 for ( $i = 0; $i < $sizeArrays; $i++ ) {
		 $requete .= $arrayColumnNames[$i];
		 //On ajoute la virgule sauf pour le dernier
		 if ( $i < $sizeArrays-1 )
			$requete .= ", ";
	 }
	 
	 //On ajoute les valeurs
	 $requete .= ")
	 VALUES(";
	 
	 //On parcourt tout le tableau pour preciser quelles valeurs on va inserer (on met des marqueurs pour utiliser des requetes preparees) 
	 for ( $i = 0; $i < $sizeArrays; $i++ ) {
		 $requete .= ":".$arrayColumnNames[$i];
		 //On ajoute la virgule sauf pour le dernier
		 if ( $i < $sizeArrays -1 )
			$requete .= ", ";
	 }
	 
	 $requete .= ")";
	 
	 $insertion = $bdd->prepare($requete);
	 
	 $arrayInsertion = array();
	 //On va remplir le tableau associatif a donner a la methode execute. Exemple : $arrayInsertion[':nom'] = "Norris"
	 for ( $i = 0; $i < $sizeArrays; $i++ ) {
		 $key = ":".$arrayColumnNames[$i];
		 $arrayInsertion[$key] = $arrayValues[$i];
	 }
	 
	 
	 echo $requete;
	 
	 
	 
	 $result = $insertion->execute($arrayInsertion);
	 
	 return $result;
 }
 
 
 
 
 
 

