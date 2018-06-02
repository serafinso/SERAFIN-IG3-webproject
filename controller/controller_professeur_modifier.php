<?php

  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('../model/model_professeur.php');
  $id=htmlspecialchars($_POST['professeur_id']);
  $nom = htmlspecialchars($_POST['professeur_nom']);
  $prenom = htmlspecialchars($_POST['professeur_prenom']);
  $dn = htmlspecialchars($_POST['professeur_date_naissance']);
  $telephone = htmlspecialchars($_POST['professeur_telephone']);
  $email = htmlspecialchars($_POST['professeur_email']);


  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Professeur_modifier.php?erreur='$erreur'");
  }else{
    $profs = Professeur :: prof_modifier($id,$nom,$prenom,$dn,$telephone, $email);
    header("Location: ../Professeur.php");
  }

?>
