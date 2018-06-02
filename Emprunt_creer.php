<?php   require_once('routeur.php'); ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <h1 class="text-center"> Création d'un emprunt </h1>
    <hr>
    <div class="row">
    <div class="col"></div>
    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_emprunt_creer.php" >

        <div class = form-group>
          <input class="form-control" type="text" placeholder="Eleve"
            name="eleve_id" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nombre de balle"
          name="nb_balle" required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nombre de raquette"
            name="nb_raquette" endif; required />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> AJOUTER </button>

      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
