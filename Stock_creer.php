<?php   require_once('routeur.php'); ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <h1 class="text-center"> Création d'un stock </h1>
    <hr>
    <div class="row">
    <div class="col"></div>
    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_stock_creer.php" >

        <div class = form-group>
          <input class="form-control" type="text" placeholder="Libellé"
            name="stock_libelle" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nombre"
          name="stock_nb" required />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"> AJOUTER </button>
      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
