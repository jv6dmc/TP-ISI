<?php
session_start();
if ($_SESSION['ID'] == "admin") {
  include("managers/connect_bdd.php");
    $result = $bdd->query("SELECT * FROM galerie");
    $i=0;
    while( $row = $result->fetch_array(MYSQLI_NUM)){
      $produits[$i] = $row[1];
      $i++;
    }
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
		<title>World-Pictures - Ajout photos</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
	  <?php include("menu.php"); ?>
        <div id="bloc_add_photos"> 
          <h3>Ajout de photos sur la page galerie</h3>
          <form id="formulaire_inscription" action="upload/index.php" method="POST"  enctype="multipart/form-data">
            <div id="form">
              <ul>
                <li class="lbl_contact"><label>Catégorie</label></li>
                <li>
                  <select name="categorie" id="categorie" >
                    <option value="00">Choisissez dans la liste</option>
                    <?php foreach ($produits as $item){?>
                      <option value="<?php echo($item); ?>"><?php echo($item); ?></option>
                    <?php } ?>
                    <option value="add">Ajouter une catégorie</option>
                  </select>
                </li>
                <li class="lbl_contact add_categorie"><label>Nom de la catégorie</label></li>
                <li class="add_categorie"><input type="text" name="nom_categorie" id="nom_categorie"/></li>
                <li class="lbl_contact"><label></label></li>
                <li id="reset"><button class="btn btn-primary btn-medium  btn btn-info"  type="reset" id="btn_reset">Effacer</button></li>
                <li id="submit"><button class="btn btn-primary btn-medium  btn btn-info"  id="btn_ajouter_photos">Prochaine étape</button></li>
              </ul>
            </div>
          </form>
	    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>