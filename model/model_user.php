<?php
class Users
/**
  *Class Professeur
  *Permet de collecter des informations sur un professeur
  */

{

    /**
    *@param aucun
    *@return array data : toutes les informations de tous les professeurs, si aucun professeur return null
    */
  public static function Get_User_Id($cookiecode)

		require_once('pdo.php');
		$req = $connect->prepare("SELECT user_id FROM users WHERE cookieuser='".$cookiecode."'");
		$req->execute();
		$data=$req->fetch();
		return $data['iduser']; //Verifier si null
	}


?>
