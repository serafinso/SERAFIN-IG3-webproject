


<?php
  require_once('routeur.php');
  if(!isConnected()){
    header("location: Accueil.php");
  }
  require_once('routeur.php');
  require_once('../model/model_eleve.php');

  $nom = htmlspecialchars($_POST['eleve_nom']);
  $prenom = htmlspecialchars($_POST['eleve_prenom']);
  $dn = htmlspecialchars($_POST['eleve_date_naissance']);
  $telephone = htmlspecialchars($_POST['eleve_telephone']);
  $email = htmlspecialchars($_POST['eleve_email']);

  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Eleve_modifier.php?erreur='$erreur'");
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erreur = "adresse email incorrect";
      header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }elseif(strlen ( $nom)>100){
       $message = "mot de passe trop long";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }elseif(strlen ( $prenom)>100){
       $message = "mot de passe trop long";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }elseif(strlen ( $dn)>100){
       $message = "mot de passe trop long";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }elseif(strlen ( $telephone)>20){
       $message = "mot de passe trop long";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }elseif(strlen ( $email)>100){
       $message = "mot de passe trop long";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }else {
    $eleves = ELeve:: e_creer($nom,$prenom,$dn,$telephone,$email);
    header("Location: ../Eleve.php");
  }
?>
