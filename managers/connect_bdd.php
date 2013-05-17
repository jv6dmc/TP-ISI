<?php
  $dbhost = "";
  $dbusername = "";
  $dbpass = "";
  $db = "";
  $bdd = new mysqli($dbhost, $dbusername, $dbpass, $db);
  
  if ($bdd->connect_error) {
     die('The Server Is Busy. Please Try Again Later.');
    }
?>