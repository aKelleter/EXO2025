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
    <h3>Exercice 2 :  Parenthèses pour contrôler la priorité</h3>
    <div class="mt-3">        
      Objectif : Réorganisez les parenthèses pour obtenir les résultats suivants à partir de cette expression :<br>

        <div class="mt-3">
          <u><b>Code</b></u> : <br>
          <pre>
          &lt;?php
            $result = 10 - 5 * 2;
            echo $result;
          ?&gt;
          </pre>
        </div>

        1. Donner le résultat de l'opération sans parenthèses.
        2. Comment forcer la soustraction avant la multiplication et quel sera le résultat ?

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