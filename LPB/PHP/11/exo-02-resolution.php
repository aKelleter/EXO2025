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
          <h4>Exercice 2 : Convertir une note en texte</h4>
          Écrivez un script qui convertit une note chiffrée ($note) entre 0 et 20 en appréciation : <br>

            - 0-9 : "Insuffisant" <br>
            - 10-12 : "Passable" <br>
            - 13-15 : "Bien" <br>
            - 16-20 : "Très bien" <br>
            - Si la note est hors de la plage, affichez "Note invalide". <br>
          <div class="mt-3">
            <u><b>Instructions</b></u> : <br>
            Code à complèter :
            <pre>
              $note = 14; // Exemple : 14.

              // .. votre switch ici.         
            </pre>         
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $note = 14; // Exemple : 14.

                switch (true) {
                    case ($note >= 0 && $note <= 9):
                        echo "Insuffisant";
                        break;
                    case ($note >= 10 && $note <= 12):
                        echo "Passable";
                        break;
                    case ($note >= 13 && $note <= 15):
                        echo "Bien";
                        break;
                    case ($note >= 16 && $note <= 20):
                        echo "Très bien";
                        break;
                    default:
                        echo "Note invalide";
                }
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $note = 14; // Exemple : 14.

              switch (true) {
                  case ($note >= 0 && $note <= 9):
                      echo "Insuffisant";
                      break;
                  case ($note >= 10 && $note <= 12):
                      echo "Passable";
                      break;
                  case ($note >= 13 && $note <= 15):
                      echo "Bien";
                      break;
                  case ($note >= 16 && $note <= 20):
                      echo "Très bien";
                      break;
                  default:
                      echo "Note invalide";
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