<?php

/**
  *Class Form
  *Permet de générer un formulaire
  */

  class Professeurs{
    /**
    *@param aucun
    *@return array data : tous les professeurs, si aucun professeur return null
    */
    public static function all_id_professeur(){
      require_once('bd.php');
      $req = $connect->prepare('SELECT * FROM professeur');
      $req->execute();
      $result;
      while ($data = $req->fetch()) {
         $result[] = $data;
      }
      return $result;
    }

    /**
    *@param int idProfesseur
    *@return array data : tous les id des professeurs
    */
    public static function nom_professeur($Professeur_id)
    {
        require_once('bd.php');
        $req = $connect->prepare("SELECT professeur_id FROM professeur WHERE professeur_id= :Professeur_id");
        $req->bindParam(':Professeur_id',$professeur_id);
        $req->execute();
        $data = $req->fetch();
        return $data[0];
    }

    /**
    *@param int Professeur_id
    *@return array data : toutes les informations sur le professeur dont l'identifiant = paramètre
    */

    public static function all_information_professeur($Professeur_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('SELECT * FROM professeur WHERE professeur_id = :professeur_id');
        $req->bindParam(':professeur_id', $Professeur_id);
        $req->execute();
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    /**
    *@param int Professeur_id
    *@return array data : toutes les informations sur le professeur dont l'identifiant = paramètre
    */
    function Select($Professeur_id) {
        require_once('bd.php');
        $req = $connect->prepare('SELECT * FROM professeur WHERE professeur-id=:Professeur_id');
        $req->bindParam(':Professeur_id', $professeur_id);
        $req->execute();
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }
  }
?>
