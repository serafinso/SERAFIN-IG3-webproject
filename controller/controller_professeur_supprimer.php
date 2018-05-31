<?php

  require_once('routeur.php');
  require_once('model/model_professeur.php');

  $profs = Professeurs::all_id_professeur();
  require_once('view/professeur_supprimer.php');
?>
