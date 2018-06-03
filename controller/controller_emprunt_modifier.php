<?php


  require_once('../routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }


  if (empty($id)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../emprunt_modifier.php?erreur='$erreur'");
  }else{
    $emprunts = Emprunt :: em_modifier($id,$nom,$prenom,$age,$telephone, $email);
    header("Location: ../Emprunt.php");
  }
?>
