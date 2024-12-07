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
    <h3>Exercice 1 : Triangle de nombres</h3>
    <div class="mt-3">   
      Objectif : Affichez un triangle de nombres comme suit : <br>
      <pre>
      1  
      1 2  
      1 2 3  
      1 2 3 4  
      1 2 3 4 5
      </pre>
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

