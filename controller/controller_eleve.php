<?php

  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_eleve.php');

  $eleves = Eleve::all_eleve();
  require_once('view/eleve_read_all.php');
?>
