<?php
 //Le contenu de la balise <head> peut changer selon la page (meta, title, etc). On cree donc une chaine de caracteres contenant tout ca, qu'on affichera ensuite

if ( !empty($_GET['page']) && $_GET['page'] == "login-index" ) {
 echo '<title>Login</title>
 <meta name="Author" content="Anthony Bocci" />
 <meta name="Language" content="fr" />
 <meta name="Description" content="Page d\'authentification contenant le formulaire permettant de se connecter" />
 <meta name="Keywords" content="Login, authentification, connexion" />
 <meta name="Robots" content="index,follow" />';
 
}
 ?>
