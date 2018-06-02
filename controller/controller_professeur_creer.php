<?php

  require_once('routeur.php');

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
      var_dump($nom, $prenom, $dn, $telephone, $email );
      //header("Location: ../Professeur_creer.php?erreur='$erreur'");
  }else{
    $profs = Professeur :: prof_creer($nom,$prenom,$dn,$telephone, $email);
    header("Location: ../Professeur.php");
  }
?>
