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
          <h3>Exercice 5 : Exercice sur les opérateurs d'incrémentation et de décrémentation</h3>
          <div class="mt-3">        
            Objectif :  Utiliser les opérateurs (++ et --) qui permettent d'incrémenter ou de décrémenter une variable. <br>

              <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              1.	Créez un fichier PHP (par exemple 07/op_incdesinc.php). <br>
              2.	Écrivez un script PHP qui : <br>
                      - Initialise une variable $z avec une valeur de 5. <br>
                      - Affichez la valeur de départ de $z. <br>
                      - Utilisez les opérateurs d'incrémentation (++) et de décrémentation (--) : $z++, ++$z, $z--, --$z <br>
                      - Affichez la valeur l'opération (opérateur) avec la structure echo ou autre. <br>
                      - Et affichez ensuite la valeur de $z après chaque opération. <br>
              </div>
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                $z = 5;
                echo '$z = '.$z.'<br>';
                echo'<hr>';
                echo '$z++ -> $z = ' . $z++ . '<br>';
                echo '$z = '.$z.'<br>';
                echo '++$z -> $z = ' . ++$z . '<br>';
                echo '$z = '.$z.'<br>';
                echo '$z-- -> $z = ' . $z-- . '<br>';
                echo '$z = '.$z.'<br>';
                echo '--$z -> $z = ' . --$z . '<br>';
                echo '$z = '.$z.'<br>';
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
                $z = 5;
                echo '$z = '.$z.'<br>';
                echo'<hr>';
                echo '$z++ -> $z = ' . $z++ . '<br>';
                echo '$z = '.$z.'<br>';
                echo '++$z -> $z = ' . ++$z . '<br>';
                echo '$z = '.$z.'<br>';
                echo '$z-- -> $z = ' . $z-- . '<br>';
                echo '$z = '.$z.'<br>';
                echo '--$z -> $z = ' . --$z . '<br>';
                echo '$z = '.$z.'<br>';
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