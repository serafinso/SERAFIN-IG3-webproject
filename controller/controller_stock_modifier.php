<?php


  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('../model/model_stock.php');
  $id=htmlspecialchars($_POST['stock_id']);
  $nom = htmlspecialchars($_POST['stock_nom']);
  $nb = htmlspecialchars($_POST['stock_nb']);

  var_dump($nom, $prenom);
  if (empty($nom) || empty($nb)) {
      $erreur = "Veuillez remplir tous les champs";
      //header("Location: ../Stock_modifier.php?erreur='$erreur'");
  }else{
    $stocks = Stock :: s_modifier($id,$nom,$nb);
    header("Location: ../Stock.php");
  }
?>
