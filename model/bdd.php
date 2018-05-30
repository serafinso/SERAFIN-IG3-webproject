<?php
  // Connexion, sélection de la base de données
  /*$dbconn = pg_connect("host=localhost dbname=postgres user=postgres password=sodu1508")
      or die('Connexion impossible : ' . pg_last_error());*/


  //database_connection.php
  $connect = new PDO('pgsql:user=postgres dbname=postgres password=sodu1508') or die('Connexion impossible : ' . pg_last_error());

?>
