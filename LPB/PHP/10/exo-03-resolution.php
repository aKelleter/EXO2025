
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
          <h4>Exercice 3 : Combinaison de ternaire et fusion null</h4>
          <div>           
            Vérifiez si une variable prix est définie et supérieure à 100. Si oui, affichez "Prix élevé", sinon "Prix faible". 
            Si prix est indéfini ou nul, affichez "Prix inconnu".<br>
            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              Code à complèter :
              <pre>
              $prix = null; // Testez avec différentes valeurs : null, 50, 150

              // Complétez ici pour déterminer le message correct
              $message = "";

              // ...

              echo $message;
              </pre>     
            </div>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $prix = null; // Testez avec différentes valeurs : null, 50, 150

                $message = $prix ?? "Prix inconnu";
                $message = is_numeric($prix) ? ($prix > 100 ? "Prix élevé" : "Prix faible") : $message;

                echo $message;
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $prix = null; // Testez avec différentes valeurs : null, 50, 150

              $message = $prix ?? "Prix inconnu";
              $message = is_numeric($prix) ? ($prix > 100 ? "Prix élevé" : "Prix faible") : $message;

              echo $message;
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