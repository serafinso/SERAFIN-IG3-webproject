<div class="container">
  <?php $title = "Informations" ?>

  <?php ob_start(); ?>

  <div class="row">
    <div class="col-sm-4">
      <h3>Bienvenue</h3>

      <p>Bonjour à tous</p>

      <p>Que vous soyez inscrit ou non, ce site est fait pour vous présenter notre club, nos activités sportives mais aussi pour vous donner des informations pratiques. </p>
      <p>Si vous souhaitez plus d'informations, N'hésitez pas à nous contacter. </p>

      <p>Cordialement</p>
    </div>
    <div class="col-sm-8">
      <div class="mx-auto">
        <img src="../img/tennisman.jpg" class="rounded" >
      </div>
    </div>
  </div>

    <hr>

  <div class="row">
    <div class="col-sm-8">
      <div class="mx-auto">
        <img src="../img/lancer.jpg" class="rounded">
      </div>
    </div>

    <br></br>
    <div class="col-sm-4">
      <h3>Horaires</h3>

      <p>Les cours :</p>

      <p>4-7 ans : dimanche matin de 9h à 11h</p>
      <p>8-12 ans : lundi-mercredi de 17h-19h</p>
      <p>13-17 ans : mardi au jeudi de 18h à 20h</p>
      <p>18-30 ans : lundi au mercredi de 17h à 19h</p>
      <p>30 ans et plus : mardi au jeudi de 18h à 20h</p>

      

      <hr>

  </div>



  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
