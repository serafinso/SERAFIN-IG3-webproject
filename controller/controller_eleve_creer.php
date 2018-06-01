<?php

  require_once('routeur.php');
  require_once('../model/model_eleve.php');

  $nom = htmlspecialchars($_POST['eleve_nom']);
  $prenom = htmlspecialchars($_POST['eleve_prenom']);
  $dn = htmlspecialchars($_POST['eleve_date_naissance']);
  $telephone = htmlspecialchars($_POST['eleve_telephone']);
  $email = htmlspecialchars($_POST['eleve_email']);

  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../eleve_creer.php?erreur='$erreur'");
  }else{
    $eleves = ELeve:: e_creer($nom,$prenom,$dn,$telephone,$email);
    header("Location: ../eleve.php");
  }
?>
