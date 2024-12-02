<?php 
  include '../../../conf.php';
  include '../../../app/fct.php';  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../../", APP_NAME." : Exercice") ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("../../../", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
    <h3>Exercice 1 : Somme des nombres</h3>
    <div class="mt-3">   
      Objectif :Utilisez une boucle do...while pour calculer la somme des nombres de 1 à 100. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Déclarez et initialisez un compteur <br>
          - Déclarez et initialisez une variable pour stocker la somme <br>  
        </div>
    </div>    
    <div class="mt-3">
      <a href="exo-01-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>

