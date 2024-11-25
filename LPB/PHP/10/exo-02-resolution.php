<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 09 - EXO-02</title>
  <?= HTMLCss("../../../") ?>

</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 2 : Nom d'utilisateur par défaut avec l'opérateur de fusion null</h3>      
          <div class="mt-5">        
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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $username = null; // Cette valeur peut être null ou un nom d'utilisateur
              $defaultUsername = "Invité";

              $output = $username ?? $defaultUsername;

              echo $output;
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

