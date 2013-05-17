<?php
session_start();
if ($_SESSION['ID'] == "admin") {
  include("managers/connect_bdd.php");
  // When the directory is not empty:
   function rrmdir($dir) {
     if (is_dir($dir)) {
       $objects = scandir($dir);
       foreach ($objects as $object) {
         if ($object != "." && $object != "..") {
           if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
         }
       }
       reset($objects);
       rmdir($dir);
     }
   }


  session_start();
  $categorie = $_SESSION["categorie"];
  if (isset($_SESSION['autre'] )) {
    if ($_SESSION['autre']==true) {
      $bdd->query("INSERT INTO galerie (theme) VALUES ('$categorie')");
      $_SESSION['autre'] = false;
      //echo("je suis dedans");
    }
  }
  //echo($_SESSION["categorie"]);
  $dir = "assets/images/portfolio/$categorie";
  rrmdir("$dir/thumbnail");
  $dh  = opendir($dir);
  while (false !== ($filename = readdir($dh))) {
      $files[] = $filename;
  }

  sort($files);

  //print_r($files);

  foreach($files as $num=>$photos) {
    if ($num==0 || $num==1) {
      
    } else {
      $produits[$num-2] = "assets/images/portfolio/$categorie/".$files[$num];
    }
  }
  $photos_2 = serialize($produits);
  $bdd->query("UPDATE `galerie` SET `photos` = '$photos_2' WHERE `theme` = '$categorie'");
  //var_dump($produits);
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
		<title>World-Pictures - Update DB Galerie</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />  
    </head>
    <body>
	  <?php include("menu.php"); ?>
      <div id="bloc_confirmation">
        <ul class="span6 offset4">
          <li>Mise à jour de la base de donnée avec succès!</li>
          <li><a title="" data-original-title="" class="btn btn-primary" href="ajout_photos.php">Ajouter des photos</a></li>
        </ul>
	    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
	</body>
</html>