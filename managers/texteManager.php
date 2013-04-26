<?php




function save_file($chemin, $contenu_du_fichier) {
  $fichier = fopen($chemin, "w");
  fwrite($fichier, $contenu_du_tableau);
  fclose($fichier);
}


function open_file($chemin){
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
    $users= unserialize($contenu_du_fichier);  
	fclose($fichier);
	return($users);
}
?>