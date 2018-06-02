<?php

/**
  *Class Form
  *Permet de générer un formulaire
  */


  class Stock{
    /**
    *@param aucun
    *@return array data : toutes les informations de tous les stocks, si aucun stock return null
    */
    public static function all_stock(){
      require_once('bd.php');
      $req = $connect->prepare('SELECT * FROM stock');
      $req->execute();
      $result=null;
      while ($data = $req->fetch()) {
         $result[] = $data;
      }
      return $result;
    }

    /**
    *@param int stock_id
    *@return array data : toutes les informations sur le stock dont l'identifiant = paramètre
    */

    public static function all_information_stock($stock_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('SELECT * FROM stock WHERE stock_id = :stock_id');
        $req->bindParam(':stock_id', $stock_id);
        $req->execute();
        $result=null;
        while($data=$req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    /**
    *@param String nom, le stock, l'dn, le telephone et l'email
    *Creer un stock
    */

    public static function s_creer($stock_libelle,$stock_nb)
    {
        require_once('bd.php');
        $req=$connect->prepare('INSERT INTO stock(stock_libelle,stock_nb) VALUES (?,?)');
        /*$req->bindParam(':stock_nom',$stock_nom);
        $req->bindParam(':stock_nb',$stock_nb);*/
        $req->execute(array($stock_libelle, $stock_nb));
      }

      /**
      *@param int id, l'dn String nom, le nb, le telephone et l'email
      *Modifie un stock
      */

    public static function s_modifier($s_id,$s_nom,$s_nb)
    {
        require_once('bd.php');
        $req=$connect->prepare("UPDATE stock SET stock_nom=:stock_nom, stock_nb=:stock_nb
           WHERE stock_id = '$s_id'");
        $req->bindParam(':stock_nom',$s_nom);
        $req->bindParam(':stock_nb',$s_nb);
        $req->execute();
    }

    /**
    *@param int id
    *Supprime un stock
    */

    public static function s_supprimer($s_id)
    {
        require_once('bd.php');
        $req = $connect->prepare('DELETE FROM stock WHERE stock_id=:s_id');
        $req->bindParam(':s_id',$s_id);
        $req->execute();
    }
  }
?>
