<?php
//login.php

include("../model/bdd.php");

if(isset($_COOKIE["type"])){
  header("location: ../view/connect.php");
}

$message = '';

if(isset($_POST["login"]))
{
  echo("enter here1");
 if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
 {
  echo("enter here2");
    $message = "<div class='alert alert-danger'>Both Fields are required</div>";
    header("location:../view/connect.php");
 } else {
   echo("enter here3");
    $query = "SELECT * FROM users  WHERE user_email = :user_email ";
    $statement = $connect->prepare($query);
    $statement->execute( array(  'user_email' => $_POST["user_email"] ) );
    var_dump($statement);
    $count = $statement->rowCount();
    if($count > 0){
      $result = $statement->fetchAll();
      foreach($result as $row){
        if($_POST["user_password"]== $row["user_password"]){
          setcookie("type", $row["user_type"], time()+3600, "/");
          header("location:../view/reservationReadAll.php");
        }else {
          echo("enter here4");
          $message = '<div class="alert alert-danger"> Wrong Password</div>';
          $_POST["message"]=$message;
            header("location:../view/connect.php");
        }
      }
    }else{

      $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
      header("location:../view/connect.php");
    }
  }
}


?>
