<?php 
include("managers/texteManager.php");

$sujet = $_POST['sujet_message'];

switch ($sujet) {
  case 01:
    $sujet = "Photographie";
    $message = message_photo();
    break;
  case 02:
    $sujet = "Photoshop";
    $ver_ps = ps_ver($_POST['ps_ver']);
    $ver_os = os_ver($_POST['os']);
    $message = message_ps($sujet, $ver_ps, $ver_os);
    break;
  case 03:
    $sujet = "Appareil photo";
    $appareil = appareil();
    $message = message_appareil($sujet, $appareil);
    break;
  case 04:
    $sujet = $_POST['sujet_autre'];
    $message = message_autre($sujet);
    break;
}

$subject = "$sujet";
$to = "";
if (sujet!="Photographie") {
	mail($to, $subject, $message);  
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures- Redirection...</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body data-title='confirmation.php'>
	  <?php include("menu.php"); ?>
        <div id="bloc_confirmation">
          <ul class="span6 offset4">
            <li>Votre Message a été envoyé avec succès !</li>
            <li>Merci de nous avoir contacté!</li>
            <li>Vous allez être redirigé dans 5 secondes...</li>
          </ul>
	    </div>
		<?php include("footer.php"); ?>	
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	</body>
</html>