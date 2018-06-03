<?php

  if(!isConnected()){
    header("location: Accueil.php");
  }

  require_once('../routeur.php');
  require_once('../model/model_emprunt.php');


  if (empty()) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../emprunt_creer.php?erreur='$erreur'");
  }else{
    $emprunts = Emprunt:: em_creer($nom,$prenom,$dn,$telephone,$email);
    header("Location: ../Emprunt.php");
  }
?>
