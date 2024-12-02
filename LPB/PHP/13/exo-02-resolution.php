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
          <h4>Exercice 2 : Table de multiplication</h4>
          Objectif : Utilisez une boucle do...while pour afficher la table de multiplication du chiffre 9, de 1 jusqu'à 10. <br>
          <div class="mt-3">
            <u><b>Instructions</b></u> : <br>
            - Trop facile... :)<br>      
            
            <strong class="red">
              Pour les plus téméraires d'entre vous élaborez un algorithme pour afficher les tables de multiplications pour les chiffres
              de 1 à 10. (en les multipliant de 1 à 10) <br>
            </strong>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $number = 9; 
                $i = 1;

                do {
                    echo "$number x $i = " . ($number * $i) . "<br>";
                    $i++;
                } while ($i <= 10);
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $number = 9; 
              $i = 1;

              do {
                  echo "$i x $number = " . ($i * $number) . "<br>";
                  $i++;
              } while ($i <= 10);

              /*
                $number = 1; 
                $i = 1;
                do {
                  do {
                    echo "$i x $number = " . ($i * $number) . "<br>";
                    $i++;
                  } while ($i <= 10);
                  $number++;
                  $i = 1;
                  echo "---- ---- ----<br>";
                } while ($number <= 10);     
               */
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