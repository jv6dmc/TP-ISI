<?php 
  include("managers/connect_bdd.php");
  $bdd->query("SET NAMES 'utf8'");
  $result = $bdd->query("SELECT * FROM galerie");
  $description_conn = $bdd->query("SELECT * FROM general");
  
  $description_array = $description_conn->fetch_array(MYSQLI_NUM);
  $description = $description_array[1];
  
  while( $row = $result->fetch_array(MYSQLI_NUM)){
    $produits[$row[0]]['theme'] = $row[1];
    $produits[$row[0]]['theme_description'] = $row[2];
    $produits[$row[0]]['photos'] = unserialize($row[3]);
  }

  foreach($produits as $id=>$item){
        $array_photos[$id]['theme'] = $produits[$id]['theme'];
        $array_photos[$id]['theme_description'] = $produits[$id]['theme_description'];
        $i=0;
        foreach($produits[$id]['photos'] as $num=>$photos) {
          $array_photos[$id]['photos'][$i] = $photos;
          $i++;
        }
      }



//echo($description);

//var_dump($array_photos);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures- Galerie</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>  
        <script src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script> 		
    </head>
    <body data-title='galerie.html'>
	  <?php include("menu.php"); ?>
		<div id="galerie">
		    <div id="galerie-intro" class="hero-unit">
			     <h3>Galerie Photos</h3>
				 <p><?php echo($description); ?></p>
		    </div>
		    <div id="galerie_photos" class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
          <?php foreach($array_photos as $num=>$theme) { ?>
				    <li class="<?php if ($num == 1) {echo("active");}?>"><a href="#tab<?php echo($num); ?>" data-toggle="tab"><?php echo($theme['theme']); ?></a></li>
          <?php }?>
				</ul>
				<div class="tab-content">
        <?php foreach($array_photos as $num=>$theme) { ?>
				  <div class="tab-pane <?php if ($num == 1) {echo("active");}?>" id="tab<?php echo($num); ?>">
				    <div class="page-header">
					    <h4><b><?php echo($theme['theme']); ?></b> <small><?php echo($theme['theme_description']);?></small></h4>
				    </div>
					  <div>
  					  <ul class="mediagrid">
    					<?php foreach($theme['photos'] as $photo) { ?>
                 <li class="span4">
    						    <a class="grouped_elements" rel="group<?php echo($num); ?>" href="<?php echo($photo); ?>"><img class="thumbnail" src="<?php echo($photo); ?>" alt=""/></a> 
    						 </li>
    		      <?php } ?>
  					  </ul>
            </div>
				  </div>
        <?php } ?>	  
			  </div>
		  </div>
		</div>
		<?php include("footer.php"); ?>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>