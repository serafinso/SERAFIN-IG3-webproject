<?php

  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('model/model_stock.php');

  $stocks = Stock::all_stock();
  require_once('view/stock_read_all.php');
?>
