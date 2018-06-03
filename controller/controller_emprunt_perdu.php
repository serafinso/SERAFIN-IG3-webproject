<?php

  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }

  require_once('model/model_emprunt.php');
  $id = $_GET['idemprunt'];
  $emprunts = Emprunt :: e_perdu($id);
  header("Location: ../emprunt.php");
?>
