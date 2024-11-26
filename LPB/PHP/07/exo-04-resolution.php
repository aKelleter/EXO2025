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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                $x = true;
                $y = false;
                echo '$x = true; $y = false;<br>';
                echo '<hr>';
                echo var_dump($x && $y) . ' = $x && $y<br>';
                echo var_dump($x || $y) . ' = $x || $y<br>';
                echo var_dump(!$x) . ' = !$x<br>';
                echo var_dump(!$y) . ' = !$y<br>';
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
               $x = true;
               $y = false;
               echo '$x = true; $y = false;<br>';
               echo '<hr>';
               echo var_dump($x && $y) . ' = $x && $y<br>';
               echo var_dump($x || $y) . ' = $x || $y<br>';
               echo var_dump(!$x) . ' = !$x<br>';
               echo var_dump(!$y) . ' = !$y<br>';
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