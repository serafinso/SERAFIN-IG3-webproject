<?php

  require_once('routeur.php');
  require_once('model/model_professeur.php');
  ?>

<div class="container">
  <?php $title = "" ?>
  <?php ob_start(); ?>
  <?php $id = $_GET['idprof'];
  $data = Professeur::all_information_professeur($id);
  $data = $data[0];
  $nom = $data[1];
  $prenom = $data[2];
  $dn = $data[3];
  $telephone = $data[4];
  $email =$data[5];

  ?>
  <h1 class="text-center"> Modification du professeur <?php echo"$nom" ?></h1>
    <hr>
    <div class="row">
    <div class="col"></div>

    <div class="col">
      <form class="form-signin" method="post" action="controller/controller_professeur_modifier.php">

        <input type = "hidden" name="professeur_id" value=<?php echo" '$id'"?> >
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Nom"
            name="professeur_nom" value=<?php echo" '$nom'" ?> >
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Prénom"
          name="professeur_prenom" value=<?php echo"'$prenom'" ?> >
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Date de naissance"
            name="professeur_date_naissance" value=<?php echo"'$dn'" ?>>
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Téléphone"
            name="professeur_telephone"value=<?php echo"'$telephone'" ?>>
        </div>
        <div class = form-group>
          <input class="form-control" type="text" placeholder="Email"
            name="professeur_email" value=<?php echo "'$email'" ?>>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> MODIFIER </button>

      </form>
    </div>
    <div class="col"></div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
</div>
