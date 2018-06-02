<?php

/**
  *Class Form
  *Permet de générer un formulaire
  */


  class Eleve{
    /**
    *@param aucun
    *@return array data : toutes les informations de tous les eleves, si aucun eleve return null
    */
    public static function all_eleve(){
      require_once('bd.php');
      $req = $connect->prepare('SELECT * FROM eleve');
      $req->execute();
      $result=null;
      while ($data = $req->fetch()) {
         $result[] = $data;
      }
      return $result;
    }

    /**
    *@param int eleve_id
    *@return array data : toutes les informations sur le eleve dont l'identifiant = paramètre
    */

    public static function all_information_eleve($eleve_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('SELECT * FROM eleve WHERE eleve_id = :eleve_id');
        $req->bindParam(':eleve_id', $eleve_id);
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
    *Creer un eleve
    */

    public static function e_creer($eleve_nom,$eleve_prenom,$eleve_dn,$eleve_telephone, $eleve_email)
    {
        require_once('bd.php');
        $req=$connect->prepare('INSERT INTO eleve(eleve_nom,eleve_prenom,eleve_date_naissance,eleve_telephone,eleve_email) VALUES (?,?,?,?,?)');
        /*$req->bindParam(':eleve_nom',$eleve_nom);
        $req->bindParam(':eleve_prenom',$eleve_prenom);
        $req->bindParam(':eleve_dn',$eleve_dn);
        $req->bindParam(':eleve_telephone',$eleve_telephone);
        $req->bindParam(':eleve_email',$eleve_email);*/
        $req->execute(array($eleve_nom, $eleve_prenom, $eleve_dn, $eleve_telephone, $eleve_email));
      }

      /**
      *@param int id, l'dn String nom, le prenom, le telephone et l'email
      *Modifie un eleve
      */

    public static function e_modifier($e_id,$e_nom,$e_prenom,$e_dn,$e_telephone, $e_email)
    {
        var_dump($e_id);
        require_once('bd.php');
        $req=$connect->prepare("UPDATE eleve SET eleve_nom=:eleve_nom, eleve_prenom=:eleve_prenom,
           eleve_dn=:eleve_dn,eleve_telephone= :eleve_telephone,eleve_email=:eleve_email WHERE eleve_id = '$e_id'");
        $req->bindParam(':eleve_nom',$e_nom);
        $req->bindParam(':eleve_prenom',$e_prenom);
        $req->bindParam(':eleve_dn',$e_dn);
        $req->bindParam(':eleve_telephone',$e_telephone);
        $req->bindParam(':eleve_email',$e_email);
        $req->execute();
    }

    /**
    *@param int id
    *Supprime un eleve
    */

    public static function e_supprimer($e_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('DELETE FROM eleve WHERE eleve_id=:e_id');
        $req->bindParam(':e_id',$e_id);
        $req->execute();
    }
  }
?>
