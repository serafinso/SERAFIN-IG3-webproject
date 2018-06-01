<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
  <div class="row">
    <div class="col-sm-8">
        <h1 class="text-center"> Professeurs </h1>
    </div>
    <div class="col-sm-4">
      <td>	<a class='btn btn-success' href='Professeur_creer.php'>Créer</a> </td>
    </div>
  </div>

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
           echo"<th>Date de naissance</th>";
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
           echo"<td>" . $row['professeur_date_naissance'] . "</td>";
           echo"<td>" . $row['professeur_telephone'] . "</td>";
           echo"<td>" . $row['professeur_email'] . "</td>";
           if (!$profs[0]=0){
             echo"<td>	<a class='btn btn-primary' href=\"Professeur_modifier?idprof=".$row['professeur_id']."\">Modifier </a> </td>";
             echo"<td>	<a class='btn btn-danger' href=\"Professeur_supprimer?idprof=".$row['professeur_id']."\">Supprimer </a> </td>";
           }

         echo"</tr>";}
       echo"</tbody>";
      echo"</table>";
   }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
