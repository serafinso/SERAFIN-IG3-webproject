<?php

/**
  *Class Emprunt
  *Permet de gérer un emprunt
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
    *@param String balle, le emprunt, la date de naissance, le telephone et l'email
    *Creer un emprunt et enmève les objet emprunté au stock
    */

    public static function em_creer($eleve_id,$nb_raquette, $nb_balle, $stock_balle, $stock_raquette)
    {
        require_once('bd.php');
        $req=$connect->prepare('INSERT INTO emprunt(stock_id,eleve_id, nb_emprunt_balle, nb_emprunt_raquette) VALUES (?,?,?,?,?)');
        $req->execute(array($stock_id,$eleve_id,$nb_raquette, $nb_balle));


        //décremente le stock

        $req=$connect->prepare("UPDATE stock SET stock_nb = :nb_emprunt_balle
           WHERE stock_id = '1'");
        $req->bindParam(':nb_emprunt_balle',$stock_balle - $nb_balle);
        $req->execute();

        $req=$connect->prepare("UPDATE stock SET stock_nb = :nb_emprunt_raquette
           WHERE stock_id = '2'");
        $req->bindParam(':nb_emprunt_raquette',$stock_raquette - $nb_raquette);
        $req->execute();

      }

      /**
      *@param int id, l'dn String balle, le nb, le telephone et l'email
      *Modifie un emprunt
      */

    public static function em_modifier($em_id,$stock_id,$eleve_id,$nb_raquette, $nb_balle)
    {
        require_once('bd.php');
        $req=$connect->prepare("UPDATE emprunt SET
          stock_id = :stock_id,
          eleve_id = :eleve_id,
          nb_emprunt_balle=:nb_emprunt_balle,
          nb_emprunt_raquette=:nb_emprunt_raquette)
           WHERE emprunt_id = '$em_id'");
        $req->bindParam(':stock_id',$stock_id);
        $req->bindParam(':eleve_id',$eleve_id);
        $req->bindParam(':nb_emprunt_balle',$em_balle);
        $req->bindParam(':nb_emprunt_raquette',$em_nb);
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
