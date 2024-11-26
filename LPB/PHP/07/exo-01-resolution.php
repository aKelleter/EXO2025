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
          <?= HTMLHeader("", "Solution") ?>
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 1 : Les opérations arithmétiques de base</h3>
          <div class="mt-3">        
          Objectif : Utiliser les opérateurs arithmétiques de base en PHP. <br>

              <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              1.	Créez un fichier PHP (par exemple 07/op_arithmetiques.php). <br>
              2.	Écrivez un script PHP qui : <br>
                  a.	Déclare deux variables $a et $b, et leur affecte des valeurs numériques. (par exemple : $a = 10, $b = 3). <br>
                      Affichez dès le départ les valeurs de $a et $b. <br>
                  b.	Affiche le résultat de l’addition de $a et $b. <br>
                  c.	Affiche le résultat de la soustraction de $a et $b. <br>
                  d.	Affiche le résultat de la multiplication de $a et $b. <br>
                  e.	Affiche le résultat de la division de $a par $b. <br>
                  f.	Affiche le reste de la division (modulo) de $a par $b. <br>
                  g.	Affiche le résultat de l’élévation de $a à la puissance $b. <br>      
              </div>
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                $a = 10;
                $b = 3;
                echo "a = $a<br>";
                echo "b = $b<br>";
                echo '<hr>';
                echo "a + b = " . ($a + $b) . "<br>";
                echo "a - b = " . ($a - $b) . "<br>";
                echo "a * b = " . ($a * $b) . "<br>";
                echo "a / b = " . ($a / $b) . "<br>";
                echo "a % b = " . ($a % $b) . "<br>";
                echo "a ** b = " . ($a ** $b) . "<br>";
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $a = 10;
              $b = 3;
              echo "a = $a<br>";
              echo "b = $b<br>";
              echo '<hr>';
              echo "a + b = " . ($a + $b) . "<br>";
              echo "a - b = " . ($a - $b) . "<br>";
              echo "a * b = " . ($a * $b) . "<br>";
              echo "a / b = " . ($a / $b) . "<br>";
              echo "a % b = " . ($a % $b) . "<br>";
              echo "a ** b = " . ($a ** $b) . "<br>";
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