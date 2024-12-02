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
    <h3>Exercice 1 : Somme des nombres pairs</h3>
    <div class="mt-3">        
      Objectif : Écrivez un script qui calcule et affiche la somme des nombres pairs compris entre 1 et 20 inclus. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Utilisez une boucle while <br>
          - Effectuez un test dans votre boucle while pour vérifier si le nombre est pair <br>  
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

