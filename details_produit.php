<?php
      error_reporting(0);
      $id_produit = $_GET['id'];
      session_start();
      $trouve=0;
      //var_dump($_SESSION);
      include("managers/connect_bdd.php");
      $result = $bdd->query("SELECT titre,description,image,prix,details FROM produits WHERE id = '$id_produit'");
  
      while ($row = $result->fetch_assoc()) {
        $produits['titre'] = $row['titre'];
        $produits['description'] = $row['description'];
        $produits['image'] = $row['image'];
        $produits['prix'] = $row['prix'];
        $produits['details'] = $row['details'];
      }
      
      
   if (isset($_SESSION["ID"])) {
      $user_logged = $_SESSION["ID"];
      
      // 1.Lecture de l'utilisateur dans la BDD      
      
        $query = $bdd->query("SELECT `data` FROM `users` WHERE `username` = '$user_logged'");
        $result = $query->fetch_object();
        $favoris = unserialize($result->data);
      
        $trouve=0;
  	    foreach($favoris as $favoris_item){
          if ($favoris_item==$id_produit){
  			    $trouve = true;
            // echo($trouve);
  		    }
  	    }

      if (isset($_GET['add']) && $trouve==0){
            $trouve=true;
            //AJOUT
            //ecriture dans la BDD
            //$size_favoris = count($users[$user_logged]['favoris'])+1;
            $size_favoris = intval(substr($_GET['add'], 4, 2));
            //echo($size_favoris);
            $favoris[$size_favoris] = $_GET['add'];
            
            $favoris = serialize($favoris);
            $bdd->query("UPDATE `users` SET `data` = '$favoris' WHERE `username` = '$user_logged'");
            //var_dump($users);
      }
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
		<title>World-Pictures - Home</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />  
    </head>
    <body>
	  <?php include("menu.php"); ?>
        <div id="bloc_details_produit">
         <h3><?php echo($produits['titre']);?></h3>
        <img src="<?php echo($produits['image']);?>" alt=""/>
        <ul>
          <?php if (isset($_SESSION["ID"])) {
                   if ($trouve==TRUE) { ?>
            <li><a class="btn btn-success btn-mini" data-original-title="" title="" disabled>Déjà dans vos favoris</a></li>
          <?php } else { ?>
            <li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title="">Ajouter aux favoris</a></li>
          <?php }} ?>
          
          
          
          
          <!--<li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title=""?>Ajouter aux favoris</a></li>-->
        </ul>
        <div class="clearfix"></div>
        <h4>Caractéristiques</h4>
        <ul>
          <li><strong>Prix</strong> : <?php echo($produits['prix']);?>$</li>
		  <li><strong>Détails techniques</strong> : <?php echo($produits['details']);?></li>
        </ul>
        <h4>Description</h4>
        <p><?php echo($produits['description']);?></p>
		      <a id="back_button" href="produits.php" class="btn btn-primary btn-medium btn btn-info">Retour Liste</a>
		    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
	</body>
</html>