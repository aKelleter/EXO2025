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
          <div>
            L'opération 3 * 2 est effectuée en premier (priorité), suivie de l'addition avec 5.
            Résultat : 5 + 6 = 11. <br>

            Pour changer l'ordre, utilisez des parenthèses.
          </div>  
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $result = 5 + 3 * 2; // 11
                echo $result;
              ?&gt;

              &lt;?php
                // Modifier la priorité avec l'aide des parenthèses
                $result = (5 + 3) * 2; // 16
                echo $result;
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $result = 5 + 3 * 2; // 16
              echo $result.'<br>';

              echo 'Après modification de la priorité : (5 + 3) * 2<br>';
              $result = (5 + 3) * 2; // 16
              echo $result;
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