<?php

  if(!isConnected()){
    header("location: Accueil.php");
  }
  
  require_once('routeur.php');
  require_once('../model/model_emprunt.php');

  $nom = htmlspecialchars($_POST['emprunt_nom']);
  $prenom = htmlspecialchars($_POST['emprunt_prenom']);
  $dn = htmlspecialchars($_POST['emprunt_date_naissance']);
  $telephone = htmlspecialchars($_POST['emprunt_telephone']);
  $email = htmlspecialchars($_POST['emprunt_email']);

  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../emprunt_creer.php?erreur='$erreur'");
  }else{
    $emprunts = Emprunt:: em_creer($nom,$prenom,$dn,$telephone,$email);
    header("Location: ../Emprunt.php");
  }
?>
