<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
  <div class="row">
    <div class="col-sm-8">
        <h1 class="text-center"> Emprunt </h1>
    </div>
    <div class="col-sm-4">
      <td>	<a class='btn btn-success btn-block' href='Emprunt_creer.php'>Créer</a> </td>
    </div>
  </div>

  <hr>
  <?php
    if (!isset($emprunts)){
      echo"Aucun emprunt";
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
        foreach($emprunts as $row) {
          echo"<tr>";
           echo"<td>" . $row['emprunt_nom'] . "</td>";
           echo"<td>" . $row['emprunt_prenom'] . "</td>";
           echo"<td>" . $row['emprunt_date_naissance'] . "</td>";
           echo"<td>" . $row['emprunt_telephone'] . "</td>";
           echo"<td>" . $row['emprunt_email'] . "</td>";
           echo"<td>	<a class='btn btn-primary' href=\"Emprunt_modifier.php?idemprunt=".$row['emprunt_id']."\">Modifier </a> </td>";
           echo"<td>	<a class='btn btn-danger' href=\"Emprunt_supprimer.php?idemprunt=".$row['emprunt_id']."\">Supprimer </a> </td>";

         echo"</tr>";}
       echo"</tbody>";
      echo"</table>";
    echo"</div>";
   }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
