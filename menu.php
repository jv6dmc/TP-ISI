<?php
 session_start();
	

	
	require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
  require_once("managers/texteManager.php");
	
   $chemin="data/user.inc";
  $currentFile = $_SERVER["PHP_SELF"];
  $parts = Explode('/', $currentFile);
  //echo $parts[count($parts) - 1];
  if ($parts[count($parts) - 1]!="details_produit.php") {  
    $users=read_file($chemin);
  }
  function find_User_ByIdPw($username, $pw){
	
	$trouve = 0;
	foreach($GLOBALS['users'] as $id => $user){
		if (($user['password']==$pw)&&($id==$username)){
			$trouve = $id;
     // echo($trouve);
		}
	}
	
	return $trouve;
	
}


//var_dump($_POST);
if (isset($_POST['login_username'])&& isset($_POST['login_password'])){
	// c'est un loop back'
	$utilisateur = find_User_ByIdPw($_POST['login_username'], $_POST['login_password']);
	//echo($utilisateur);
  if ($utilisateur!='0'){
		// Il peut se logger

		echo('Bienvenue');
		$_SESSION[UTILISATEUR] = $utilisateur;		
		//$chemin = REP_ETUDIANTS.'detail.php';		
		
	}
	else{
		//Afficher desolé
    echo("pas marcher!!!!!!!!!!!!!!!!!!!!!!");
		session_destroy();
	}
	header("");	
}

	//var_dump($_SESSION);









?>

<div class="container">
	    <header>
		  <a href="index.php"><img id="logo" src="assets/images/earth2.gif" alt="logo"/></a>
		  <img id="logo1" src="assets/images/logo.png" alt="logo"/>
		  <div id='titre'>
		    <h1 class="hidden">World Pictures</h1>
		    <h2 class="hidden">Le monde est sous vos yeux</h2>
		  </div>
		  <address>
		    <strong>World Pictures, Inc.</strong><br>
		    795 Folsom Ave, Suite 600<br>
			Montréal, QC H3V 5F6<br>
			<abbr title="Phone">Tel:</abbr> (514) 456-7890<br>
			<a href="mailto:#">worldpictures@gmail.com</a>
		  </address>
      <!--<p id="msg_welcome">
        Bienvenue nom
      </p>-->
        <ul id="connexion">
          <li class="connexion"><a href="inscription.php">S'inscrire</a></li>
          <li class="connexion">|</li>
          <li class="connexion "><a href="#login-box" class="login-window">Connexion</a></li>
        </ul>
        <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="assets/images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="index.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Identifiant</span>
                <input id="username" name="login_username" value="" type="text" autocomplete="on" placeholder="Identifiant">
                </label>
                
                <label class="password">
                <span>Mot de passe</span>
                <input id="password" name="login_password" value="" type="password" placeholder="Mot de passe">
                </label>
                
                <button class="submit button" type="submit">Connexion</button>
                
                <p>
                <a class="forgot" href="inscription.php">S'inscrire</a>
                </p>
                
                </fieldset>
          </form>
		</div>
		</header>
		<div class="navbar ">
	        <div class="navbar-inner">
			  <span class="brand"></span>
			  <ul class="nav">
			    <li class="divider-vertical"></li>
				<li><a href="index.php">Accueil</a></li>
				<li class="divider-vertical"></li>
        <li><a href="galerie.php">Photos</a></li>
				<li class="divider-vertical"></li>
				<li><a href="produits.php">Produits</a></li>
				<li class="divider-vertical"></li>
			  </ul>
			  <ul class="nav pull-right">
				<li class="divider-vertical"></li>
				<li>
				  <a href="contact.php">Contact</a>
				</li> 
			  </ul>
			</div>
		</div>
		<div class="row">
		  <div id="followus" class="span2 offset10">
		    <div id="followus_list">
		    <ul>
			  <li><a href="http://www.facebook.com/" rel="tooltip"><img id="facebook" data-original-title="Facebook" class="social" src="assets/images/facebook.png"  alt="logo facebook" /></a></li>
			  <li><a href="http://www.google.com/" rel="tooltip"><img id="googleplus" data-original-title="Google+"  class="social" src="assets/images/googleplus.png"   alt="logo google"/></a></li>
			  <li><a href="http://www.twitter.com/" rel="tooltip"><img id="twitter" data-original-title="Twitter" class="social" src="assets/images/twitter-bird.png"  alt="logo twitter"/></a></li> 
			  <li><a href="http://www.instagram.com/" rel="tooltip"><img id="instagram" data-original-title="Instagram" class="social" src="assets/images/instagram.png"   alt="logo google"/></a></li>
			  <li><a href="http://www.linkedin.com/" rel="tooltip"><img id="linkedin" data-original-title="LinkedIn" class="social" src="assets/images/linkedin.png"   alt="logo google"/></a></li>
			</ul>
			</div>
		  </div>
        </div>