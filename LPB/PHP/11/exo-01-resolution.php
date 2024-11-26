<?php require_once '../../../app/fct.php';?>
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
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 1 : Calculatrice basique</h3>
          <div class="mt-3">        
          Créez un script où l'utilisateur fournit deux nombres ($a et $b) et une opération ($operation : "+", "-", "*", "/"). Utilisez un switch pour effectuer l'opération et afficher le résultat. Si une division par zéro est détectée, affichez "Erreur : division par zéro".<br>

            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              Code à complèter :
              <pre>
              $a = 10;
              $b = 5;
              $operation = "+"; // Essayez avec "+", "-", "*", "/".

              // .. votre switch ici.
              </pre>         
            </div>
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $a = 10;
              $b = 5;
              $operation = "+"; // Essayez avec "+", "-", "*", "/".

              switch ($operation) {
                  case "+":
                      echo "Résultat: " . ($a + $b);
                      break;
                  case "-":
                      echo "Résultat: " . ($a - $b);
                      break;
                  case "*":
                      echo "Résultat: " . ($a * $b);
                      break;
                  case "/":
                      if ($b == 0) {
                          echo "Erreur : division par zéro";
                      } else {
                          echo "Résultat: " . ($a / $b);
                      }
                      break;
                  default:
                      echo "Opération non reconnue";
              }
            ?&gt;
            </textarea>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
  </div>

  <?= HTMLJs("../../../") ?>
</body>
</html>

