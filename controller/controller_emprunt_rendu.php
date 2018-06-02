<?php

  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_emprunt.php');
  $id = $_GET['idemprunt'];
  $emprunts = Emprunt :: em_rendu($id);
  header("Location: ../Emprunt.php");
?>
