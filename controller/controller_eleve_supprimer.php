<?php

  require_once('routeur.php');
  require_once('model/model_eleve.php');
  $id = $_GET['ideleve'];
  $eleve = Eleve :: e_supprimer($id);
  header("Location: ../eleve.php");
?>
