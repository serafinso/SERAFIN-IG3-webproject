<html>
 <head>
   <!-- Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <title>PHP-Test</title>
 </head>
 <body>
   <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
     <div class="container">
       <div class="nav navbar-nav navbar-left"></div>


         <a class="navbar-brand" href="/user/viewConnect">Gestion du Festival du Jeu de Montpellier</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">


         <div class="col-auto">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">

               <select id="globalAnneeFestival" class="form-control">

               </select>

           </li>
           <li class="nav-item">
             <a class="nav-link" href="/user/viewConnect">Accueil<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/editeur/readAll">Editeur</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/jeu/readAll">Jeux</a>
           </li>

           <li class="nav-item" >
             <a class="nav-link" href="/colis/readAll">Colis</a>
           </li>
           <li class="nav-item">
             <a  class="nav-link" href="/festival/readAll">Festival</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/reservation/readAll">Réservation</a>
           </li>
           <li class="nav-item" >
             <a class="nav-link" href="/zone/readAll">Plan</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/user/actionDisconnect">Déconnexion</a>
           </li>
         </ul>
         </div>

         <div class="col-md-6">
         <ul class="navbar-nav my-2 my-lg-0" id="navbarResponsive">
           <li class="nav-item">
             <a class="nav-link" href="/user/viewConnect">Connexion</a>
           </li>
           <!--<li class="nav-item">
             <a class="nav-link" href="/user/viewRegister">Inscription</a>
           </li>-->
         </ul>
         </div>
       </div>
     </div>
   </nav>


  <form action = "index.php" method = "POST">
    <p> <input type = "text" name = "prenom"  /> </p>
    <p> <input type = "submit" value = "Valider" /> </P>
  </form>


 </body>
</html>
