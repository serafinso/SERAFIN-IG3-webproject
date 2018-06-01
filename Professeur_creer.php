<?php   require_once('routeur.php'); ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <h1 class="text-center"> Création professeur </h1>
    <hr>
    <div class="row">
    <div class="col"></div>
    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_professeur_creer.php" >

        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nom"
            name="professeur_nom" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Prénom"
          name="professeur_prenom" required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Age"
            name="professeur_age" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Téléphone"
            name="professeur_telephone" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Email"
            name="professeur_email" endif; required />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> AJOUTER </button>

      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
