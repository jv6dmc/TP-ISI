<?php 
include("managers/connect_bdd.php");
  $result = $bdd->query("SELECT * FROM produits");
  
  while( $row = $result->fetch_array(MYSQLI_NUM)){
    $produits[$row[0]]['titre'] = $row[1];
    $produits[$row[0]]['description'] = $row[2];
    $produits[$row[0]]['image'] = $row[3];
    $produits[$row[0]]['prix'] = $row[4];
    $produits[$row[0]]['details'] = $row[5];
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
		<title>World-Pictures- Home</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<!--<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    </head>
    <body>
	  <?php include("menu.php"); ?>
    <div id="bloc_produits">
      <?php foreach($produits as $id_produit=>$info) {?>
        <a href="details_produit.php?id=<?php echo($id_produit);?>">
          <div class="produit" id="<?php echo($id_produit);?>">
            <img class="image" src="<?php echo($produits[$id_produit]['image']);?>" alt=""/>
            <ul>
              <li class="produit_titre"><?php echo($produits[$id_produit]['titre']);?></li>
              <li><?php echo($produits[$id_produit]['description']);?></li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </a>
      <?php }?>
    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>