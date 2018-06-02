<?php

  require_once('routeur.php');
  require_once('model/model_emprunt.php');
  $id = $_GET['idemprunt'];
  $emprunts = Emprunt :: em_rendu($id);
  header("Location: ../Emprunt.php");
?>
