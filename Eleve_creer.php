<?php   require_once('routeur.php'); ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <h1 class="text-center"> Création d'un eleve </h1>
    <hr>
    <div class="row">
    <div class="col"></div>
    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_eleve_creer.php" >

        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nom"
            name="eleve_nom" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Prénom"
          name="eleve_prenom" required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Date de naissance JJ-MM-AA"
            name="eleve_date_naissance" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Téléphone"
            name="eleve_telephone" endif; required />
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Email"
            name="eleve_email" endif; required />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> AJOUTER </button>

      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
