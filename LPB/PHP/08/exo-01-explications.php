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
    <h3>Exercice 1 :  Quelle est la valeur de $result et pourquoi ?</h3>
    <div class="mt-3">        
      Objectif : Donnez votre réponse et justifiez. Comment modifier l'ordre de priorité ?<br>

        <div class="mt-3">
          <u><b>Code</b></u> : <br>
          <pre>
          &lt;?php
            $result = 5 + 3 * 2;
            echo $result;
          ?&gt;  
          </pre>
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