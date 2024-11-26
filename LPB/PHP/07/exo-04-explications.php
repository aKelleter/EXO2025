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
    <h3>Exercice 4 : Exercice sur les opérateurs logiques</h3>
    <div class="mt-3">        
      Objectif : Les opérateurs logiques (&&, ||, !) permettent de combiner des expressions booléennes. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.	Créez un fichier PHP (par exemple 07/op_logique.php). <br>
          2.	Écrivez un script PHP qui : <br>
                  - Prend deux variables booléennes, $x = true et $y = false. <br>
                  - Utilise les opérateurs logiques &&, || et !. <br>
                  - Affiche le résultat de chaque expression. <br>
        </div>
    </div>       
    <div class="mt-3">
      <a href="exo-04-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>