<?php

  require('../routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('../model/model_professeur.php');

  $nom = htmlspecialchars($_POST['professeur_nom']);
  $prenom = htmlspecialchars($_POST['professeur_prenom']);
  $dn = htmlspecialchars($_POST['professeur_date_naissance']);
  $telephone = htmlspecialchars($_POST['professeur_telephone']);
  $email = htmlspecialchars($_POST['professeur_email']);

  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Professeur_modifier.php?erreur='$erreur'");
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erreur = "adresse email incorrect";
      header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }elseif(strlen ( $nom)>100){
       $message = "mot de passe trop long";
       header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }elseif(strlen ( $prenom)>100){
       $message = "mot de passe trop long";
       header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }elseif(strlen ( $dn)>100){
       $message = "mot de passe trop long";
       header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }elseif(strlen ( $telephone)>20){
       $message = "mot de passe trop long";
       header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }elseif(strlen ( $email)>100){
       $message = "mot de passe trop long";
       header("Location: ../Professeur_modifier.php?erreur='$erreur'&idprof='$id'");
  }else {
    $profs = Professeur :: prof_creer($nom,$prenom,$dn,$telephone, $email);
    header("Location: ../Professeur.php");
  }
?>
