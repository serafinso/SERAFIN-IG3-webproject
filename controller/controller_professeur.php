<?php

  require_once('routeur.php');
  require_once('model/model_professeur.php');

  $profs = Professeur::all_professeur();
  require_once('view/professeur_read_all.php');
?>
