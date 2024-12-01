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
    <h3>Exercice 3 :  Priorité des opérateurs logiques</h3>
    <div class="mt-3">        
      Objectif : Que retourne l'expression suivante ?<br>

        <div class="mt-3">
          <u><b>Code</b></u> : <br>
          <pre>
          &lt;?php
            $result = 10 > 5 && 2 == 3 || 4 > 1;
            var_dump($result);
          ?&gt;
          </pre>
        </div>

        Vous devez analyser et interprêter l'intruction suivante : 10 > 5 && 2 == 3 || 4 > 1
        en tenant compte des priorités de chacun des opérateurs logiques.

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