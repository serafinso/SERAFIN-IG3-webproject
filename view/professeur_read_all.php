<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>

  <h1 class="text-center"> Professeurs </h1>
  <hr>
  <?php
    if (!isset($profs)){
      echo"Aucun professeur";
    }else{
      echo "<table class='table'>";
       echo"<thead class='thead-dark'>";
         echo"<tr>";
           echo"<th>Nom</th>";
           echo"<th>Prénom</th>";
           echo"<th>Age</th>";
           echo"<th>Téléphone</th>";
           echo"<th>Email</th>";
           echo"<th></th>";
           echo"<th></th>";
         echo"</tr>";
       echo"</thead>";
       echo"<tbody>";
        foreach($profs as $row) {
          echo"<tr>";
           echo"<td>" . $row['professeur_nom'] . "</td>";
           echo"<td>" . $row['professeur_prenom'] . "</td>";
           echo"<td>" . $row['professeur_age'] . "</td>";
           echo"<td>" . $row['professeur_telephone'] . "</td>";
           echo"<td>" . $row['professeur_email'] . "</td>";
           echo"<td>	<a class='btn btn-primary' href='Professeur_modifier.php'>Modifier </a> </td>";
           echo"<td>	<a class='btn btn-danger' href='Professeur_supprimer.php'>Supprimer </a> </td>";

         echo"</tr>";}
       echo"</tbody>";
      echo"</table>";
   }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
