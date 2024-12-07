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
    <h3>Exercice 2 : Trouver le facteur d'un nombre</h3>
    <div class="mt-3">   
      Objectif : Calculez le factoriel d’un nombre donné, par exemple 5 (5 × 4 × 3 × 2 × 1 = 120). <br>
    </div>    
    <div class="mt-3">
      <a href="exo-02-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>

