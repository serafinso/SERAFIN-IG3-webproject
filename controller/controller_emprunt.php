<?php

  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_emprunt.php');

  $emprunts = Emprunt::all_emprunt();
  require_once('view/emprunt_read_all.php');
?>
