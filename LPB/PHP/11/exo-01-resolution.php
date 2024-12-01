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
          <h4>Exercice 1 : Calculatrice basique</h4>
          Créez un script où l'utilisateur fournit deux nombres ($a et $b) et une opération ($operation : "+", "-", "*", "/"). 
          Utilisez un switch pour effectuer l'opération et afficher le résultat. Si une division par zéro est détectée, affichez "Erreur : 
          division par zéro".<br>
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
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
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
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
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