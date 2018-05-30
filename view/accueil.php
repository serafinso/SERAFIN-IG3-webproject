<div class="container">
  <?php $title = "Accueil" ?>

  <?php ob_start(); ?>
  <div class="container">

  </div>
  <div class="container">
      <div class="row">
          <div class="col-xs-12 mx.auto"> <h1> Nous vous souhaitons la bienvenue au complexe de tennis de Ventenac Cabardes </h1> </div>
      </div>
  </div>


  <div id="demo" class="carousel slide mx-auto" data-ride="carousel" style="height: 305px; width: 445px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/smiley.png" class="rounded" alt="Smiley">
      </div>
      <div class="carousel-item">
        <img src="../img/play.jpg" class="rounded" alt="Play">
      </div>
      <div class="carousel-item">
        <img src="../img/terrain.jpeg" class="rounded" alt="Terrain">
      </div>
    </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <div>
</div>

</div>


  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
