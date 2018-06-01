<?php

  require_once('routeur.php');
  require_once('model/model_professeur.php');
  $id = $_GET['idprof'];
  $profs = Professeur :: prof_supprimer($id);
  header("Location: ../Professeur.php");
?>
