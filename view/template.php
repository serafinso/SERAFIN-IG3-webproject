<!doctype html>

<html>

	<head>

		<meta charset="UTF-8">

		<!--
			LOGO A COTE DE L'URL
			<link rel="icon" type="image/png" href="/img/favicon.png" />
		-->

		<!-- Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<!-- Reset CSS -->
		<link rel="stylesheet" href="/public/css/reset.css">

		<!-- Google Open Sans font -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="/style/style.css">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!DOCTYPE html>

        <title><?= $title ?></title>

	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
			<div class="container">
						<a class="navbar-brand" href="/user/viewConnect">Tennis Ventenac Cabardes</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
							<li class="nav-item"><a class="nav-link" href="Accueil.php">Accueil<span class="sr-only">(current)</span></a></li>
							<?php if(isConnected()) {?><li class="nav-item" ><a class="nav-link" href ="Eleve.php">Eleve</a></li> <?php } ?>
							<?php if(isConnected()) {?><li class="nav-item" ><a class="nav-link" href ="Professeur.php">Professeur</a></li> <?php } ?>
							<?php if(isConnected()) {?><li class="nav-item" ><a class="nav-link" href ="Stock.php">Stock</a></li> <?php } ?>
							<?php if(isConnected()) {?><li class="nav-item" ><a class="nav-link" href ="Emprunt.php">Emprunt</a></li> <?php } ?>
					</ul>
          <ul class="navbar-nav navbar-right my-2 my-lg-0" id="navbarResponsive">
						<?php if (!isConnected()) {?> <li class="nav-item"><a class="nav-link" href="Connexion.php"><span class="glyphicon-log-in"> </span>Connexion administrateur</a></li> <?php } ?>
						<?php if (isConnected()) {?> <li class="nav-item"><a class="nav-link" href="Deconnexion.php"><span class="glyphicon-log-in"> </span>Déconnexion</a>  </li> <?php } ?>
          </ul>
				</div>
			</div>
		</nav>

    <div class = container>
      </br>
      <?= $content ?>
    </div>
	  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4 container-fluid text-center">
			<div class="col-md-12 text-center">
				<p class="uppercase" style="margin-top: 5px"> IG 3 - Polytech Montpellier - SERAFIN Solène - 2017-2018</p>
			</div>
	  </footer>



	<!-- JS Bootstrap-->
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	<!-- Jquery UI -->
	<link rel="stylesheet" href="/js/jquery-ui/jquery-ui.min.css">
	<script src="/js/jquery-ui/jquery-ui.min.js"></script>
	<script src="/js/triTableau.js"></script>

	</body>
</html>
