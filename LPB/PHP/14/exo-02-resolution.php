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
          <h3>Exercice 2 : Trouver le facteur d'un nombre</h3>
          <div class="mt-3">   
            Objectif : Calculez le factoriel d’un nombre donné, par exemple 5 (5 × 4 × 3 × 2 × 1 = 120). <br>
          </div>             
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php              
                $nombre = 5;
                $factoriel = 1;
                for ($i = 1; $i <= $nombre; $i++) {
                    $factoriel *= $i;
                }
                echo "Le factoriel de $nombre est : $factoriel";              
              ?&gt;              
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $nombre = 5;
              $factoriel = 1;
              for ($i = 1; $i <= $nombre; $i++) {
                  $factoriel *= $i;
              }
              echo "Le factoriel de $nombre est : $factoriel";   
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