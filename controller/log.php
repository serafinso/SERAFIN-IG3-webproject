<?php
  $cookie_name = "loggedin";

  $dbconn = pg_connect("host=localhost dbname=postgres user=postgres password=sodu1508")
      or die('Connexion impossible : ' . pg_last_error());

  if (!$dbconn){
    die("Database connexion failed !");
  }elseif (isset($_POST['connection'])) {
    $user = $_POST['log'];
    $pass = $_POST['password'];

    echo($pass);

    $phash = sha1(sha1($pass."salt")."salt");

    $sql = "SELECT * FROM users WHERE login='$user' AND password='$phash';";
    var_dump($sql);

    $result = pg_query($dbconn, $sql);
    $count = pg_num_rows($result);

    var_dump($count);
    if ($count == 1){
      $cookie_value = $user;
      echo("Connection réussie !");
      setcookie($cookie_name, $cookie_value, time() * 3600*24, null, null, false, true);
      header("Location : ../view/reservationReadAll.php ");
    }else{
      header("Location : ../view/connect.php");
      echo("Invalid :(");
    }
  }elseif(isset($_POST['reg'])){
    $user = $_POST['log'];
    $pass = $_POST['password'];

    $phash = sha1(sha1($pass."salt")."salt");

    $sql = "INSERT INTO users VALUES ('1', '$user', '$phash','', false);";
    //﻿insert into users values(1, 'demo', 'demo', 'demo', false, '');
    var_dump($sql);
    $result = pg_query($dbconn, $sql);

  }
?>
