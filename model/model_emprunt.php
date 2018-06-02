<?php

/**
  *Class Form
  *Permet de générer un formulaire
  */


  class Emprunt{
    /**
    *@param aucun
    *@return array data : toutes les informations de tous les emprunts, si aucun emprunt return null
    */
    public static function all_emprunt(){
      require_once('bd.php');
      $req = $connect->prepare('SELECT * FROM emprunt');
      $req->execute();
      $result=null;
      while ($data = $req->fetch()) {
         $result[] = $data;
      }
      return $result;
    }

    /**
    *@param int emprunt_id
    *@return array data : toutes les informations sur le emprunt dont l'identifiant = paramètre
    */

    public static function all_information_emprunt($emprunt_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('SELECT * FROM emprunt WHERE emprunt_id = :emprunt_id');
        $req->bindParam(':emprunt_id', $emprunt_id);
        $req->execute();
        $result=null;
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    /**
    *@param String nom, le emprunt, l'dn, le telephone et l'email
    *Creer un emprunt
    */

    public static function em_creer($emprunt_libelle,$emprunt_nb)
    {
        require_once('bd.php');
        $req=$connect->prepare('INSERT INTO emprunt(emprunt_libelle,emprunt_nb) VALUES (?,?)');
        /*$req->bindParam(':emprunt_nom',$emprunt_nom);
        $req->bindParam(':emprunt_nb',$emprunt_nb);*/
        $req->execute(array($emprunt_libelle, $emprunt_nb));
      }

      /**
      *@param int id, l'dn String nom, le nb, le telephone et l'email
      *Modifie un emprunt
      */

    public static function em_modifier($em_id,$em_nom,$em_nb)
    {
        var_dump($em_id);
        require_once('bd.php');
        $req=$connect->prepare("UPDATE emprunt SET emprunt_nom=:emprunt_nom, emprunt_nb=:emprunt_nb
           WHERE emprunt_id = '$em_id'");
        $req->bindParam(':emprunt_nom',$em_nom);
        $req->bindParam(':emprunt_nb',$em_nb);
        $req->execute();
    }

    /**
    *@param int id
    *Supprime un emprunt
    */

    public static function em_perdu($em_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('DELETE FROM emprunt WHERE emprunt_id=:em_id');
        $req->bindParam(':em_id',$em_id);
        $req->execute();
    }

    /**
    *@param int id
    *Supprime un emprunt
    */

    public static function em_rendu($em_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('DELETE FROM emprunt WHERE emprunt_id=:em_id');
        $req->bindParam(':s_id',$em_id);
        $req->execute();

        //TO DO : remettre dans le stock
    }
  }
?>
