<?php

  /**
  *Class Users
  *Permet de collecter des informations sur un utilisateur
  */


  class Users{

    public static function users_password($u_id)
    {
        require('bd.php');
        $req = $connect->prepare('SELECT user_password FROM users WHERE user_id = :user_id');
        $req->bindParam(':user_id', $u_id);
        $req->execute();
        $result=null;
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }
  }

  ?>
