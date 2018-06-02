<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
  <div class="row">
    <div class="col-sm-8">
        <h1 class="text-center"> Professeurs </h1>
    </div>
    <div class="col-sm-4">
      <p>	<a class='btn btn-success btn-block' href='Professeur_creer.php'>Créer</a> </p>
    </div>
  </div>

  <hr>
  <?php
    if (!isset($profs)){
      echo"Aucun professeur";
    }else{
       $c=1;
        foreach($profs as $row) {
          if($c%3==1){
            echo"<div class='row'>";
          }
          echo"<div class='col-sm-4'>";
            echo"<div class='card'>";
              echo"<div class='card-body'>";
                echo"<h2> Professeur </h2>";
                echo"<p> Nom : " . $row['professeur_nom'] . "</p>";
                echo"<p> Prenom : " . $row['professeur_prenom'] . "</p>";
                echo"<p> Date de naissance :" . $row['professeur_date_naissance'] . "</p>";
                echo"<p> Téléphone : " . $row['professeur_telephone'] . "</p>";
                echo"<p> Email : " . $row['professeur_email'] . "</p>";
                echo"<p>	<a class='btn btn-primary' href=\"Professeur_modifier.php?idprof=".$row['professeur_id']."\">Modifier </a> </p>";
                echo"<p>	<a class='btn btn-danger' href=\"Professeur_supprimer.php?idprof=".$row['professeur_id']."\">Supprimer </a> </p>";
              echo"</div>";
            echo"</div>";
          echo"</div>";

          if($c%3==0){
            echo"</div>";
            echo"<br>";
          }

          $c++;
        }
        /* echo"</tr>";}
       echo"</tbody>";
      echo"</table>";*/
   }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>
</div>
