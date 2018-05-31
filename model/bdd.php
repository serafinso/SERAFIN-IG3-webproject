<?php
  // Connexion, sélection de la base de données

  $dsn='pgsql:dbname=d4935a1s4b7ep9;host=ec2-54-235-206-118.compute-1.amazonaws.com';
  $user="fgsmdxomkvdcvs";
  $password="76b8ff0667b24022792e52a1a74091754dcbd458dc2da9bb0ba667c436eb924f";

  $connect = new PDO($dsn, $user, $password) or die('Connexion impossible : ' . pg_last_error())
    or die('Connexion impossible : ' . pg_last_error());
?>
