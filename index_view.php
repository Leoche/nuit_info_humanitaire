<!DOCTYPE html>
<html>
<head>
	<?php //On place les balises meta, title etc
	include('common/gestion_balise_head.php');
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<script type="text/javascript" src="inclusion.js"></script>
	<script type="text/javascript" src="jquery/jquery-2.1.1.min.js"></script>
</head>
<body>
	
	<h1>Fichier de test de modules</h1>
	
	<p>Ce ficher sert à tester les modules.</p>
	
	<?php
	inclusion_page($_GET['page']);
	?>

	
</body>
</html>
