<?php

  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
    setcookie('user', '', time() - 3600, '/');

    header("location: Accueil.php");
?>

 ?>
