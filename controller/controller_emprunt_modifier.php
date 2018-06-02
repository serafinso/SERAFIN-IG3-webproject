<?php


  require_once('routeur.php');
  require_once('../model/model_emprunt.php');
  $id=htmlspecialchars($_POST['emprunt_id']);
  $nom = htmlspecialchars($_POST['emprunt_nom']);
  $prenom = htmlspecialchars($_POST['emprunt_prenom']);
  $age = htmlspecialchars($_POST['emprunt_age']);
  $telephone = htmlspecialchars($_POST['emprunt_telephone']);
  $email = htmlspecialchars($_POST['emprunt_email']);


  if (empty($nom) || empty($prenom) || empty($age) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../emprunt_modifier.php?erreur='$erreur'");
  }else{
    $emprunts = Emprunt :: em_modifier($id,$nom,$prenom,$age,$telephone, $email);
    header("Location: ../Emprunt.php");
  }
?>
