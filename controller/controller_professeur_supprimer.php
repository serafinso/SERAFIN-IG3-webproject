<?php

  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_professeur.php');
  $id = $_GET['idprof'];
  $profs = Professeur :: prof_supprimer($id);
  header("Location: ../Professeur.php");
?>
