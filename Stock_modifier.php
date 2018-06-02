<?php

  require_once('routeur.php');
  require_once('model/model_stock.php');
  ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <?php $id = $_GET['idstock'];
  $data = stock::all_information_stock($id);
  $data = $data[0];
  $nom = $data[1];
  $stock = $data[2];

  ?>
  <h1 class="text-center"> Modification du stock <?php echo"$nom" ?></h1>
    <hr>
    <div class="row">
    <div class="col"></div>

    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_stock_modifier.php">

        <input type = "hidden" name="stock_id" value=<?php echo" '$id'"?> >
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nom"
            name="stock_nom" value=<?php echo" '$nom'" ?> >
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Prénom"
          name="stock_nb" value=<?php echo"'$stock'" ?> >
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> MODIFIER </button>

      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
