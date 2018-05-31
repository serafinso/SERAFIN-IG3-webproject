<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>

    <?php  setcookie('user', '', time() - 3600, '/'); ?>
    <p> Vous avez été déconnecté </p>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
