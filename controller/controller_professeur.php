<?php

  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_professeur.php');

  $profs = Professeur::all_professeur();
  require_once('view/professeur_read_all.php');
?>
