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
          <h4>Exercice 1 : Triangle de nombres</h4>
          <div class="mt-3">   
            Objectif : Affichez un triangle de nombres comme suit : <br>
            <pre>
            1  
            1 2  
            1 2 3  
            1 2 3 4  
            1 2 3 4 5
            </pre>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                for ($i = 1; $i <= 5; $i++) {
                  for ($j = 1; $j <= $i; $j++) {
                      echo $j . " ";
                  }
                  echo "<br>";
                }            
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php            
             for ($i = 1; $i <= 5; $i++) {
                 for ($j = 1; $j <= $i; $j++) {
                     echo $j . " ";
                 }
                 echo "<br>";
             }             
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