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
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <?= HTMLHeader("../../../", "Solution") ?>
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3 class="mt-5">Réponse</h3>
          <h4>Exercice 1 : Somme des nombres</h4>
          Objectif :Utilisez une boucle do...while pour calculer la somme des nombres de 1 à 100. <br>
          <div class="mt-3">
            <u><b>Instructions</b></u> : <br>
            - Déclarez et initialisez un compteur <br>
            - Déclarez et initialisez une variable pour stocker la somme <br>  
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $sum = 0;
                $i = 1;

                do {
                    $sum += $i;
                    $i++;
                } while ($i <= 100);

                echo "La somme des nombres de 1 à 100 est : " . $sum;
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php 
              $sum = 0;
              $i = 1;

              do {
                  $sum += $i;
                  $i++;
              } while ($i <= 100);

              echo "La somme des nombres de 1 à 100 est : " . $sum;
            ?>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs("../../../") ?>
</body>
</html>