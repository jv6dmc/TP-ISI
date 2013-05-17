<?php
function message_ps($sujet, $ver_ps, $ver_os) {

  $name = $_POST['name'].", ".$_POST['prenom'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $message = $_POST['champ_text'];
  

  $message = "
Nom: $name
Email: $email
Url: $url
Sujet: $sujet
$ver_ps
$ver_os

Message :
$message

";
  return $message;
}

function message_photo($sujet) {

  $name = $_POST['name'].", ".$_POST['prenom'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $message = $_POST['champ_text'];
  

  $message = "
Nom: $name
Email: $email
Url: $url
Sujet: $sujet

Message :
$message

";
  return $message;
}

function message_appareil($sujet, $appareil) {

  $name = $_POST['name'].", ".$_POST['prenom'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $message = $_POST['champ_text'];
  
  
  $message = "
Nom: $name
Email: $email
Url: $url
Sujet: $sujet
$appareil

Message :
$message

";
  return $message;
}

function message_autre($sujet) {

  $name = $_POST['name'].", ".$_POST['prenom'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $message = $_POST['champ_text'];
  
  
  $message = "
Nom: $name
Email: $email
Url: $url
Sujet: $sujet

Message :
$message

";
  return $message;
}


function ps_ver($ver_ps) {
  switch ($ver_ps) {
    case 01:
      $ver_ps = "Adobe photoshop cs3";
      break;
    case 02:
      $ver_ps = "Adobe photoshop cs4";
      break;
    case 03:
      $ver_ps = "Adobe photoshop cs5";
      break;
    case 04:
      $ver_ps = "Adobe photoshop cs6";
      break;
    case 05:
      $ver_ps = "Adobe photoshop element 9";
      break;
    case 06:
      $ver_ps = "Adobe photoshop element 10";
      break;
    case 07:
      $ver_ps = "Adobe photoshop element 11";
      break;
    case 08:
      $ver_ps = $_POST['version_autre'];
      break;
  }
  $ver_ps = "Version de photoshop : ".$ver_ps;
  return $ver_ps;  
}

function os_ver($ver_os) {
  switch ($ver_os) {
    case 01:
      $ver_os = "Windows XP";
      break;
    case 02:
      $ver_os = "Windows Vista";
      break;
    case 03:
      $ver_os = "Windows 7";
      break;
    case 04:
      $ver_os = "OSX";
      break;
    case 05:
      $ver_os = "Linux";
      break;
    case 06:
      $ver_os = $_POST['os_autre'];
      break;
  }
  $ver_os = "Version du OS : ".$ver_os;
  return $ver_os;
}
  
function appareil() {
  $appareil = $_POST['appareil'];
  if ($appareil == "autre") {
    $appareil = "Model : ".$_POST['appareil_autre'];
  } else {
    $appareil = "Model : ".$appareil;
  }
  return $appareil;
}
?>