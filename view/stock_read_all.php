<div class="container">
  <?php $title = "" ?>

  <?php ob_start(); ?>
  <div class="row">
    <div class="col-sm-8">
        <h1 class="text-center"> Stocks </h1>
    </div>
    <div class="col-sm-4">
      <td>	<a class='btn btn-success btn-block' href='Stock_creer.php'>Créer</a> </td>
    </div>
  </div>

  <hr>
  <?php
    $c=1;
    if (!isset($stocks)){
      echo"Aucun stock";
    }else{
      foreach($stocks as $row) {
        if($c%3==1){
          echo"<div class='row'>";
        }
            echo"<div class='col-sm-4'>";
              echo"<div class='card'>";
                echo"<div class='card-body'>";
                  echo"<h4 class='card-title'>".$row['stock_libelle']."</h4>";
                  echo"<p class='card-title'> Nombre : ".$row['stock_nb']."</p>";
                  echo"<a class='btn btn-primary' href=\"Stock_modifier?idstock=".$row['stock_id']."\">Modifier </a>";
                  echo" ";
                  echo"<a class='btn btn-danger' href=\"Stock_supprimer?idstock=".$row['stock_id']."\">Supprimer</a>";
                echo"</div>";
              echo"</div>";
            echo"</div>";
        if($c%3==0){
          echo"</div>";
          echo"<br>";
        }
        $c++;
      }

    }?>

  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>

</div>
