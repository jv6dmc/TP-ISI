<?php

function open_file($chemin){
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
    $users= unserialize($contenu_du_fichier);  
	fclose($fichier);
	return($users);
}


function read_file($chemin){
  $fichier= fopen($chemin , "r");
  $contenu_du_fichier=fread($fichier,filesize($chemin));
  $users= unserialize($contenu_du_fichier);  
  fclose($fichier);
  
  return $users;
   
}


function write_file($chemin,$users){
    $contenu_du_tableau= serialize($users);
    save_file($chemin, $contenu_du_tableau);
}


<<<<<<< HEAD
function save_file($chemin, $contenu_du_fichier) {
  $fichier = fopen($chemin, "w");
  fwrite($fichier, $contenu_du_fichier);
  fclose($fichier);
}


=======
function open_file($chemin){
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
    $users= unserialize($contenu_du_fichier);  
	fclose($fichier);
	return($users);
}
>>>>>>> f26edd95c91cd9a346c8e3fa326f64d1fb80c7fd
?>