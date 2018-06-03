<?php
  //login.php
  require_once('routeur.php');
  require_once("model/bd.php");
  if(isConnected()){
    header("location: Accueil.php");
  }
  if(isset($_POST["login"]))
  {
   if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
   {
      $message = "Veuillez remplir les deux champs";
      //header("location:Connect.php?message=".$message);
   }else
      {
      $query = "SELECT * FROM users  WHERE user_email = :user_email ";
      $statement = $connect->prepare($query);
      $userMail = htmlspecialchars($_POST["user_email"]);
      $userPass =  htmlspecialchars($_POST["user_password"]);
      if(strlen ($userMail)>100 || strlen ( $userPass)>100){
        $message = "mot de passe trop long";
      }elseif (!filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
         $message = "adresse email incorrect";
      }
      $statement->execute( array(  'user_email' => $userMail ) );
      $count = $statement->rowCount();
      if($count > 0){
        $result = $statement->fetchAll();
        foreach($result as $row){
          $cript = hash( 'sha256', $userPass );
          if($cript == $row["user_password"])
          {
            setcookie("user",$row["user_id"] , time()+3600*24*365, "/");
            setcookie("pw", $row["user_password"], time()+3600*24*365, "/");
            header("location:Accueil.php");
          }
          else
          {
            $message = 'Mot de passe incorrect';
          }
        }
      }
      else
      {
        $message = "adresse email incorrecte";
      }
    }
  }
  require_once('view/connexion.php');
?>
