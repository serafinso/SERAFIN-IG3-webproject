<?php

  require_once('routeur.php');
  require_once('../model/model_professeur.php');

  $nom = htmlspecialchars($_POST['professeur_nom']);
  $prenom = htmlspecialchars($_POST['professeur_prenom']);
  $age = htmlspecialchars($_POST['professeur_age']);
  $telephone = htmlspecialchars($_POST['professeur_telephone']);
  $email = htmlspecialchars($_POST['professeur_email']);

  if (empty($nom) || empty($prenom) || empty($age) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Professeur_creer.php?erreur='$erreur'");
  }else{
    $profs = Professeur :: prof_creer($nom,$prenom,$age,$telephone, $email);
    header("Location: ../Professeur.php");
  }
?>
