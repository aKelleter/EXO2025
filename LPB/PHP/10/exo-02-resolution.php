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
          <h4>Exercice 2 : Nom d'utilisateur par défaut avec l'opérateur de fusion null</h4>
          <div>           
            Utilisez l'opérateur de fusion null pour afficher un nom d'utilisateur par défaut si aucune valeur n'est définie. <br>
            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              Code à complèter :
              <pre>
                $username = null; // Cette valeur peut être null ou un nom d'utilisateur
                $defaultUsername = "Invité";

                // Utilisez l'opérateur de fusion null pour assigner une valeur à $output
                // ...

                echo $output;    
              </pre>     
            </div>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $username = null; // Cette valeur peut être null ou un nom d'utilisateur
                $defaultUsername = "Invité";

                $output = $username ?? $defaultUsername;

                echo $output;
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $username = null; // Cette valeur peut être null ou un nom d'utilisateur
              $defaultUsername = "Invité";

              $output = $username ?? $defaultUsername;

              echo $output;
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