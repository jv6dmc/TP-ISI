<?php
  
  /*$bdd = new mysqli($dbhost, $dbusername, $dbpass, $db);
  if ($bdd->connect_error) {
   die('The Server Is Busy. Please Try Again Later.');
  }
  
  $result = $bdd->query("SELECT 'data' FROM users");
  
  var_dump($result);*/
  /*
  $data[0] = "prod01";
  $data[1] = "prod02";
  $data[2] = "prod08";
  $favoris = serialize($data);
    
  include("managers/connect_bdd.php");
  */
  /*
  $bdd->query("UPDATE `users` SET `data` = '$favoris' WHERE `username` = 'br'");
  

  $query = $bdd->query("SELECT `data` FROM `users` WHERE `username` = 'br'");
  $result = $query->fetch_object();
  
  $favoris2 = unserialize($result->data);*/
  //echo "{$result->data}";
  /*var_dump($favoris2);
  echo($favoris2[0]);
  echo($favoris2[1]);
  echo($favoris2[2]);
  */
  /*$result = $bdd->query("SELECT * FROM users");
  
  while( $row = $result->fetch_array(MYSQLI_NUM)){
    $users[$row[0]]['username'] = $row[1];
    $users[$row[0]]['password'] = $row[2];
    $users[$row[0]]['nom'] = $row[3];
    $users[$row[0]]['prenom'] = $row[4];
    $users[$row[0]]['email'] = $row[5];
    $users[$row[0]]['data'] = unserialize($row[6]);
  }
  
  
  var_dump($users);
  echo($users[3]['data'][1]);
  
  //$user = $row['data'];
  /*$i = 0;
  while($row = $result->fetch_assoc()){
    $user[$i] = $row['data'];
    $i++;
  }*/
  
  //var_dump($user);
  
  
  
  //var_dump($result);
  
  //echo($result['data']);*/
  
  //include("managers/connect_bdd.php");
  /*$query = $bdd->query("SELECT * FROM `produits` WHERE `id` = '1'");
  $result = $query->fetch_object();
  
  $produits['titre'] = $result->titre;
  $produits['description'] = $result->description;
  $produits['image'] = $result->image;
  $produits['prix'] = $result->prix;
  $produits['details'] = $result->details;
  
  var_dump($produits);
  */
  
  /*$result = $bdd->query("SELECT titre,description,image,prix,details FROM produits WHERE id = '1'");
  
   while ($row = $result->fetch_assoc()) {
    $produits['titre'] = $row['titre'];
    $produits['description'] = $row['description'];
    $produits['image'] = $row['image'];
    $produits['prix'] = $row['prix'];
    $produits['details'] = $row['details'];
  }
  
  var_dump($produits);*/
  
  
  
  $photos[0] = "assets/images/portfolio/faune.jpg";
  $photos[1] = "assets/images/portfolio/faune1.jpg";
  $photos[2] = "assets/images/portfolio/faune2.jpg";
  $photos[3] = "assets/images/portfolio/faune3.jpg";
  $photos[4] = "assets/images/portfolio/faune5.jpg";
  $photos[5] = "assets/images/portfolio/faune6.jpg";
  
  $photos = serialize($photos);
  
  
  include("managers/connect_bdd.php");
  
  $bdd->query("UPDATE `galerie` SET `photos` = '$photos' WHERE `id` = '2'");
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /*$result = $bdd->query("SELECT * FROM produits");
  
  while( $row = $result->fetch_array(MYSQLI_NUM)){
    $produits[$row[0]]['titre'] = $row[1];
    $produits[$row[0]]['description'] = $row[2];
    $produits[$row[0]]['image'] = $row[3];
    $produits[$row[0]]['prix'] = $row[4];
    $produits[$row[0]]['details'] = $row[5];
  }*/
  
  //var_dump($produits);
  
  
?>
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
		<link rel="stylesheet" type="text/css" href="assets/css/main2.css" />  
    </head>
    <body>
<?php include("menu.php");
session_start();
echo("test");
//echo($_SESSION["ID"]);


?>
<script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
</body>