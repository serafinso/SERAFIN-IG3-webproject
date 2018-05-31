<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
PROF
  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
