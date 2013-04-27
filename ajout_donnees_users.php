<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
       //AJOUT
  // 1.Lecture de tous les users
  $chemin="data/user.inc";

  $users=read_file($chemin);
  var_dump($users);
  
  $affiche = false;
  /*
  $favoris=array(
							'prod01',
              'prod03',
              'prod04'					
												);


//ecriture dans le tableau
  $users['jv6dmc']['favoris']=$favoris;
  write_file($chemin,$users);
  
  echo("modifications réussis!");*/
?>
<?php if ($affiche==true) {?>
  <ul>
    <li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title=""?>Ajouter aux favoris</a></li>
  </ul>
<?php } else {?>
  <h2>Ca marche pas :(</h2>
<?php } ?>
