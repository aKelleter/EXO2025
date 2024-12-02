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
    <h3>Exercice 2 : Table de multiplication</h3>
    <div class="mt-3">   
      Objectif : Utilisez une boucle do...while pour afficher la table de multiplication du chiffre 9, en le multipliant de 1 jusqu'à 10. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Trop facile... :)<br>        
        </div>
        <strong class="red">
          Pour les plus téméraires d'entre vous élaborez un algorithme pour afficher les tables de multiplications pour les chiffres
          de 1 à 10. (en les multipliant de 1 à 10) <br>
        </strong>
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

