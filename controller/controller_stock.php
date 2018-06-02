<?php

  require_once('routeur.php');
  require_once('model/model_stock.php');

  $stocks = Stock::all_stock();
  require_once('view/stock_read_all.php');
?>
