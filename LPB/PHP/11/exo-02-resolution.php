<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 11 - EXO-03</title>
  <?= HTMLCss("../../../") ?>

</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 2 : Convertir une note en texte</h3>
          <div class="mt-3">        
            Écrivez un script qui convertit une note chiffrée ($note) entre 0 et 20 en appréciation : <br>

            - 0-9 : "Insuffisant" <br>
            - 10-12 : "Passable" <br>
            - 13-15 : "Bien" <br>
            - 16-20 : "Très bien" <br>
            - Si la note est hors de la plage, affichez "Note invalide". <br>
          </div>
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
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
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
  </div>

  <?= HTMLJs("../../../") ?>
</body>
</html>

