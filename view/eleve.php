<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
ELEVES
  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
