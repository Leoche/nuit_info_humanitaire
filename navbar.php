<?php
	require_once('organisation/controller/function_is_connect.php');
	require_once('benevoles/controller/function_is_connect.php');
	//Si l'utilisateur n'est pas connecte
	if ( !is_connect_benevole() && !is_connect_organisation() ){
?>

 <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-static-top custom-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group hidden" id="login-form-group">
                <input type="text" class="form-control" placeholder="Email">
                <input type="text" class="form-control" placeholder="Mot de passe">
              </div>
              <button class="btn btn-default" id="btn-register">Inscription</button>
              <button type="submit" class="btn btn-success btn-login">Connexion</button>
            </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
  <?php  
}

    ?>
