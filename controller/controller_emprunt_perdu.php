<?php

  require_once('routeur.php');
  require_once('model/model_eleve.php');
  $id = $_GET['ideleve'];
  $eleves = Eleve :: e_perdu($id);
  header("Location: ../eleve.php");
?>
