<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
  <div class="row">
    <div class="col-sm-8">
        <h1 class="text-center"> Elèves </h1>
    </div>
    <div class="col-sm-4">
      <td>	<a class='btn btn-success btn-block' href='Eleve_creer.php'>Créer</a> </td>
    </div>
  </div>

  <hr>
  <?php
    if (!isset($eleves)){
      echo"Aucun eleve";
    }else{
    echo "<div class='table-responsive'>";
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
        foreach($eleves as $row) {
          echo"<tr>";
           echo"<td>" . $row['eleve_nom'] . "</td>";
           echo"<td>" . $row['eleve_prenom'] . "</td>";
           echo"<td>" . $row['eleve_naissance'] . "</td>";
           echo"<td>" . $row['eleve_telephone'] . "</td>";
           echo"<td>" . $row['eleve_email'] . "</td>";
           echo"<td>	<a class='btn btn-primary' href=\"Eleve_modifier.php?ideleve=".$row['eleve_id']."\">Modifier </a> </td>";
           echo"<td>	<a class='btn btn-danger' href=\"Eleve_supprimer.php?ideleve=".$row['eleve_id']."\">Supprimer </a> </td>";

         echo"</tr>";}
       echo"</tbody>";
      echo"</table>";
    echo"</div>";
   }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
