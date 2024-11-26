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
          <h3>Exercice 1 : Majeur/Mineur avec une condition ternaire</h3>
          <div class="mt-3">        
            Écrivez une condition ternaire pour déterminer si une personne est majeure ou mineure à partir de son âge, et affichez 
            un message correspondant. <br>

            
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $age = 17; // Vous pouvez modifier cette valeur
              $message = ""; // Initialisation

              $message = ($age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";

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

