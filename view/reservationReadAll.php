<div class="container">
  <?php $title = "reservationReadAll" ?>

  <?php ob_start(); ?>

    CONNEXION REUSSIE
    <?php
    if (isset($_COOKIE['type']) ){
      echo($_COOKIE['type']);} ?>


  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
