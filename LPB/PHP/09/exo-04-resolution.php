<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 09 - EXO-04</title>
  <?= HTMLCss() ?>

</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 4 : Afficher le plus grand nombre</h3>
          <div class="mt-3">        
            Écrire un script PHP qui affiche le plus grand de trois nombres donnés.<br>        
            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              - Créer trois variables contenant des nombres entiers. <br>
              - Utiliser une structure conditionnelle pour afficher le plus grand nombre. <br>
              - Modifiez les valeurs des variables pour tester le script. <br>

            </div>          
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $a = 12;
              $b = 25;
              $c = 8;

              if ($a > $b && $a > $c) {
                  echo "$a est le plus grand.";
              } elseif ($b > $c) {
                  echo "$b est le plus grand.";
              } else {
                  echo "$c est le plus grand.";
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

