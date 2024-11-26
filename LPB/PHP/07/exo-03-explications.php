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
    <?= HTMLHeader("", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
    <h3>Exercice 3 : Exercice sur les opérateurs de comparaison</h3>
    <div class="mt-3">        
      Objectif : Utiliser les opérateurs de comparaison, permettant de comparer deux valeurs. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.	Créez un fichier PHP (par exemple 07/op_compare.php). <br>
          2.	Écrivez un script PHP qui : <br>
                  - Déclare deux variables, par exemple $a = 5 et $b = 10. <br>
                  - Compare ces deux variables avec les opérateurs ==, !=, <, >, <=, >=. <br>
                  - Affiche le résultat de chaque comparaison (true ou false). <br>  
        </div>
    </div>       
    <div class="mt-3">
      <a href="exo-03-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>