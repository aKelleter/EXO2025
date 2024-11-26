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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                $a = 5;
                $b = 10;
                echo "a = $a, b = $b<br>";
                echo "<hr>";
                echo "a == b : ";
                var_dump($a == $b);
                echo "<br>";
                echo "a != b : ";
                var_dump($a != $b);
                echo "<br>";
                echo "a < b : ";
                var_dump($a < $b);
                echo "<br>";
                echo "a > b : ";
                var_dump($a > $b);
                echo "<br>";
                echo "a <= b : ";
                var_dump($a <= $b);
                echo "<br>";
                echo "a >= b : ";
                var_dump($a >= $b);
                echo "<br>";
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
               $a = 5;
               $b = 10;
               echo "a = $a, b = $b<br>";
               echo "<hr>";
               echo "a == b : ";
               var_dump($a == $b);
               echo "<br>";
               echo "a != b : ";
               var_dump($a != $b);
               echo "<br>";
               echo "a < b : ";
               var_dump($a < $b);
               echo "<br>";
               echo "a > b : ";
               var_dump($a > $b);
               echo "<br>";
               echo "a <= b : ";
               var_dump($a <= $b);
               echo "<br>";
               echo "a >= b : ";
               var_dump($a >= $b);
               echo "<br>";
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