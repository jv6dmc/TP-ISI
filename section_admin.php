<?php 

session_start();
if ($_SESSION['ID'] == "admin") {
  
   
  
} else {
  header("location: index.php");
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
		<title>World-Pictures - Section Admin</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />  
    </head>
    <body>
	  <?php include("menu.php"); ?>
        <div id="bloc_gestion_favoris">
          <ul>
            <li><a href="gestion_favoris.php">Gestion des données</a></li>
            <li><a href="ajout_photos.php">Ajout de photos sur la page galerie</a></li>
          </ul>        
		    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
	</body>
</html>