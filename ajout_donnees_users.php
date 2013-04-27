<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
       //AJOUT
  // 1.Lecture de tous les users
  $chemin="data/user.inc";

  $users=read_file($chemin);
  var_dump($users);
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