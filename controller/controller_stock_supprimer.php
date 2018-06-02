<?php

  require_once('routeur.php');
  require_once('model/model_stock.php');
  $id = $_GET['idstock'];
  $stocks = Stock::s_supprimer($id);
  header("Location: ../Stock.php");
?>
