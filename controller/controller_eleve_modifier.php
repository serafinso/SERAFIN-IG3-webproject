<?php
  require_once('routeur.php');

  if(!isConnected()){
    header("location: Accueil.php");
  }

  require_once('routeur.php');
  require_once('../model/model_eleve.php');
  $id=htmlspecialchars($_POST['eleve_id']);
  $nom = htmlspecialchars($_POST['eleve_nom']);
  $prenom = htmlspecialchars($_POST['eleve_prenom']);
  $dn = htmlspecialchars($_POST['eleve_dn']);
  $telephone = htmlspecialchars($_POST['eleve_telephone']);
  $email = htmlspecialchars($_POST['eleve_email']);

  var_dump($nom, $prenom, $dn, $telephone, $email);
  if (empty($nom) || empty($prenom) || empty($dn) || empty($telephone) || empty($email)) {
      $erreur = "Veuillez remplir tous les champs";
      header("Location: ../Eleve_modifier.php?erreur='$erreur'");
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $erreur = "adresse email incorrect";
       header("Location: ../Eleve_modifier.php?erreur='$erreur'&ideleve='$id'");
  }else{
    $eleves = Eleve :: e_nom_modifier($id,$nom);
    $eleves = Eleve :: e_prenom_modifier($id,$prenom);
    $eleves = Eleve :: e_dn_modifier($id,$dn);
    $eleves = Eleve :: e_telephone_modifier($id,$telephone);
    $eleves = Eleve :: e_email_modifier($id,$email);
    header("Location: ../Eleve.php");
  }
?>
