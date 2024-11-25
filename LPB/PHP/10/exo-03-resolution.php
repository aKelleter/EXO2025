<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 09 - EXO-03</title>
  <?= HTMLCss("../../../") ?>

</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 3 : Combinaison de ternaire et fusion null</h3>
      <div class="mt-3">        
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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $prix = null; // Testez avec différentes valeurs : null, 50, 150

              $message = $prix ?? "Prix inconnu";
              $message = is_numeric($prix) ? ($prix > 100 ? "Prix élevé" : "Prix faible") : $message;

              echo $message;
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

