<div class="container">
  <?php $title = "Accueil" ?>

  <?php ob_start(); ?>
  <div class="container">

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h1>Bienvenue au complexe de tennis de Ventenac Cabardes </h1></div>
    <div class="col-sm-2"></div>
  </div>

  <br>
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
        <div class="carousel-caption">
          <h3 class="text-white font-weight-bold">La bonne humeur est toujours présente </h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/play.jpg" class="rounded" alt="Play">
        <div class="carousel-caption">
          <h1 class="text-dark font-weight-bold"> Le tennis c'est aussi du sérieux </h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/terrain.jpeg" class="rounded" alt="Terrain">
        <div class="carousel-caption">
          <h1 class="text-dark font-weight-bold">Voici nos terrains</h1>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <hr>

  <div class="row">
    <div class="col-sm-4">
      <h2 class="text-center">Bienvenue</h2>
      <br>
      <div class="mx-auto">
        <div class="card border-primary mb-3">
          <div class="container">
            <div class="col-auto">
              <div class="input-group mb-3">
                <br>
                <p>Bonjour à tous</p>

                <p class="text-justify">Que vous soyez inscrit ou non, ce site est fait pour vous présenter notre club, nos activités sportives mais aussi pour vous donner des informations pratiques. </p>
                <p class="text-justify">Si vous souhaitez plus d'informations, N'hésitez pas à nous contacter. </p>

                <p>Cordialement</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="container-fluid">
        <div class="text-center">
          <img src="../img/tennisman.jpg" class="rounded" >
        </div>
      </div>
    </div>
  </div>

    <hr>

  <div class="row">
    <div class="col-sm-8">
      <div class="container-fluid">
        <div class="text-center">
          <img src="../img/lancer.jpg" class="center-block" class="rounded">
        </div>
      </div>
    </div>

    <br></br>
    <div class="col-sm-4">
      <h2 class="text-center">Horaires</h2>
      <br>
      <div class="mx-auto">
        <div class="card border-primary mb-3">
          <div class="container">
            <div class="col-auto">
              <div class="input-group mb-3">
                <p>Les cours :</p>

                <p>4-7 ans : dimanche matin de 9h à 11h</p>
                <p>8-12 ans : lundi-mercredi de 17h-19h</p>
                <p>13-17 ans : mardi-jeudi de 18h à 20h</p>
                <p>18-30 ans : lundi-jeudi de 17h à 19h</p>
                <p>30 et + : mardi-jeudi de 18h à 20h</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <h2 class="text-center">Coordonnées</h2>
          <br>
          <div class="mx-auto">
						<div class="card border-primary mb-3">
							<div class="container">
								<div class="col-auto">
									<div class="input-group mb-3">
                     <h5> CABARDES TENNIS CLUB </h5>
                     <hr>
                    <p> <img src="../img/home.png" >  1 rue du Cimetière 11610 VENTENAC CABARDES	</p>
                    <p> <img src="../img/phone.png" > 0468788212</p>
                    <p> <img src="../img/email.png" > cabardestennisclub@orange.fr</p>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="container-fluid">
            <div class="text-center">
              <img src="../img/tennisman.jpg" class="rounded" >
            </div>
          </div>
        </div>
      </div>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
