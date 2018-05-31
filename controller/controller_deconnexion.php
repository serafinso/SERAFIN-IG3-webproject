<<?php
  require_once('routeur.php');
  setcookie('user', '', time() - 3600, '/');
  require_once('view/deconnexion.php');

 ?>
