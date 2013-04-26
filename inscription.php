<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures- Inscription</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
     <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39031065-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
	  <?php include("menu.php"); ?>
        <div id="bloc_contact"> 
          <h3><img class="img_titre" src="assets/images/add_user.png">Inscription</h3>
          <form id="formulaire_inscription" action="inscription.php" method="POST">
          <div id="form">
		    <p class="intro" ><strong>Nous vous remercions pour votre intérêt!</strong></p>
			<p class="intro" ><strong>Veuillez remplir ce formulaire afin de faire partie de nos membres!</strong></p>
			<p class="intro" ><strong>Vous recevrez un email de confirmation dans les prochaines minutes</strong></p>
            <ul>
              <li class="lbl_contact"><label>Nom</label></li>
              <li><input type="text" name="name" id="name" placeholder="Nom..."/></li>
              <li class="lbl_contact"><label>Pr&eacute;nom</label></li>
              <li><input type="text" name="prenom" id="prenom" placeholder="Pr&eacute;nom..."/></li>
              <li class="lbl_contact"><label>Courriel</label></li>
              <li><input type="text" name="email" id="email" placeholder="abc@example.com"/></li>
			  <li class="lbl_contact"><label>Identifiant</label></li>
              <li><input type="text" name="username" id="username" placeholder="Choisissez votre identifiant"/></li>
			  <li class="lbl_contact"><label>Mot de passe</label></li>
              <li><input type="password" name="password" id="password" placeholder="Votre mot de passe"/></li>
			  <li class="lbl_contact"><label>Confirmez Mot de passe</label></li>
              <li><input type="password" name="conf_password" id="conf_password" placeholder="Retaper votre mot de passe"/></li>
			  <li class="lbl_contact"><label></label></li>
              <li id="reset"><button type="reset" id="btn_reset">Effacer</button></li>
              <li id="submit"><button id="btn_submit_inscription">Envoyer</button></li>
            </ul>
          </div>
          </form>
	    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	</body>
</html>