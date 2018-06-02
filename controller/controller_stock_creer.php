<?php

  require_once('routeur.php');
  require_once('../model/model_stock.php');

  $libelle = htmlspecialchars($_POST['stock_libelle']);
  $nb = htmlspecialchars($_POST['stock_nb']);

  var_dump($libelle, $nb);
  if (empty($libelle) || empty($nb) ) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Stock_creer.php?erreur='$erreur'");
  }else{
    $stocks = Stock::s_creer($libelle,$nb);
    header("Location: ../Stock.php");
  }
?>
