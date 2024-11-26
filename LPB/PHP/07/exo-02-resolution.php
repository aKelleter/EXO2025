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
          <h3>Exercice 2 : Exercice sur les opérateurs d'affectation</h3>
          <div class="mt-3">        
            Objectif : Manipuler les opérateurs d'affectation permettent de définir une valeur à une variable et de la modifier. <br>

              <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              1.	Créez un fichier PHP (par exemple 07/op_affectation.php). <br>
              2.	Écrivez un script PHP qui : <br>
                      - Initialise une variable $x avec la valeur de 10. <br>
                      - Utilise les opérateurs d'affectation suivants : +=5, -=3, *=2, /=4, et affiche la valeur de $x après chaque opération. <br>          
              </div>
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                $x = 10;
                echo "x = $x<br>";
                echo '<hr>';               
                $x += 5;
                echo "x += 5 => $x (équivalent de x = x + 5)<br>";
                $x -= 3;
                echo "x -= 3 => $x (équivalent de x = x - 3)<br>";
                $x *= 2;
                echo "x *= 2 => $x (équivalent de x = x * 2)<br>";
                $x /= 4;
                echo "x /= 4 => $x (équivalent de x = x / 4)<br>";
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
               $x = 10;
               echo "x = $x<br>";
               echo '<hr>';               
               $x += 5;
               echo "x += 5 => $x (équivalent de x = x + 5)<br>";
               $x -= 3;
               echo "x -= 3 => $x (équivalent de x = x - 3)<br>";
               $x *= 2;
               echo "x *= 2 => $x (équivalent de x = x * 2)<br>";
               $x /= 4;
               echo "x /= 4 => $x (équivalent de x = x / 4)<br>";
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
