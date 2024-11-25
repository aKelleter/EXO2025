<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 09 - EXO-01</title>
  <?= HTMLCss() ?>

</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 1 : Vérification de la parité d'un nombre</h3>
          <div>           
            Écrire un script PHP qui vérifie si un nombre donné est pair ou impair. <br>  
            <u><b>Instructions</b></u> : <br>
            - Créer une variable contenant un nombre entier. <br>
            - Utiliser une structure conditionnelle pour vérifier si le nombre est pair ou impair. <br>
            - Afficher "Le nombre est pair" ou "Le nombre est impair" en fonction du cas. <br> 
          </div>
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $nombre = 15;

              if ($nombre % 2 == 0) {
                  echo "$nombre est pair.";
              } else {
                  echo "$nombre est impair.";
              }
            ?&gt;
            </textarea>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
  </div>

  <?= HTMLJs() ?>
</body>
</html>

