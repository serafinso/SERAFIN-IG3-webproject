<?php

/**
  *Class Form
  *Permet de générer un formulaire
  */


  class Professeur{
    /**
    *@param aucun
    *@return array data : toutes les informations de tous les professeurs, si aucun professeur return null
    */
    public static function all_professeur(){
      require_once('bd.php');
      $req = $connect->prepare('SELECT * FROM professeur');
      $req->execute();
      $result=null;
      while ($data = $req->fetch()) {
         $result[] = $data;
      }
      return $result;
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
        $result=null;
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    /**
    *@param String nom, le prenom, l'dn, le telephone et l'email
    *Creer un professeur
    */

    public static function prof_creer($professeur_nom,$professeur_prenom,$professeur_dn,$professeur_telephone, $professeur_email)
    {
        require_once('bd.php');
        $req=$connect->prepare('INSERT INTO professeur(professeur_nom,professeur_prenom,professeur_naissance,professeur_telephone,professeur_email) VALUES (?,?,?,?,?)');
        /*$req->bindParam(':professeur_nom',$professeur_nom);
        $req->bindParam(':professeur_prenom',$professeur_prenom);
        $req->bindParam(':professeur_dn',$professeur_dn);
        $req->bindParam(':professeur_telephone',$professeur_telephone);
        $req->bindParam(':professeur_email',$professeur_email);*/
        $req->execute(array($professeur_nom, $professeur_prenom, $professeur_dn, $professeur_telephone, $professeur_email));
      }

      /**
      *@param int id, l'dn String nom, le prenom, le telephone et l'email
      *Modifie un professeur
      */

    public static function prof_modifier($p_id,$p_nom,$p_prenom,$p_dn,$p_telephone, $p_email)
    {
        var_dump($p_id);
        require_once('bd.php');
        $req=$connect->prepare("UPDATE professeur SET professeur_nom=:professeur_nom, professeur_prenom=:professeur_prenom,
           professeur_naissance=:professeur_dn,professeur_telephone= :professeur_telephone,professeur_email=:professeur_email WHERE professeur_id = '$p_id'");
        $req->bindParam(':professeur_nom',$p_nom);
        $req->bindParam(':professeur_prenom',$p_prenom);
        $req->bindParam(':professeur_dn',$p_dn);
        $req->bindParam(':professeur_telephone',$p_telephone);
        $req->bindParam(':professeur_email',$p_email);
        $req->execute();
    }

    /**
    *@param int id
    *Supprime un professeur
    */

    public static function prof_supprimer($p_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('DELETE FROM professeur WHERE professeur_id=:prof_id');
        $req->bindParam(':prof_id',$p_id);
        $req->execute();
    }
  }
?>
