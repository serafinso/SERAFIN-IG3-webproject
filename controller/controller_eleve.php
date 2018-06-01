<?php

  require_once('routeur.php');
  require_once('model/model_eleve.php');

  $eleves = Eleve::all_eleve();
  require_once('view/eleve_read_all.php');
?>
