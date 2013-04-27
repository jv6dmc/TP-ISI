<?php include('data/bdd.inc');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures - Gestion Favoris</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<!--<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
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
    <div id="bloc_gestion_favoris">
      <h3>Gestion des données</h3>
      <h4>Favoris</h4>
      <table class="table table-bordered">
<thead>
<tr>
<th>Identifiant</th>
<th>prodID</th>
<th>Nom du produit</th>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="2">1</td>
<td>Mark</td>
<td>Otto</td>
</tr>
<tr>
<td>Mark</td>
<td>Otto</td>
</tr>
<tr>
<td>2</td>
<td>Jacob</td>
<td>Thornton</td>
</tr>
<tr>
<td>3</td>
<td>Larry the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
<h4>Utilisateurs enregistrés</h4>
<table class="table table-bordered">
<thead>
<tr>
<th>Identifiant</th>
<th>Nom</th>
<th>Prénom</th>
<th>Courriel</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Mark</td>
<td>Otto</td>
<td>email@example.com</td>
</tr>
<td>2</td>
<td>Jacob</td>
<td>Thornton</td>
<td>email@example.com</td>
</tr>
<tr>
<td>3</td>
<td>Larry the Bird</td>
<td>@twitter</td>
<td>email@example.com</td>
</tr>
</tbody>
</table>
    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>