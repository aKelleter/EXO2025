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
          <h4>Exercice 1 : Majeur/Mineur avec une condition ternaire</h4>
          <div>           
            Écrivez une condition ternaire pour déterminer si une personne est majeure ou mineure à partir de son âge, et affichez 
            un message correspondant. <br>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $age = 17; // Vous pouvez modifier cette valeur
                $message = ""; // Initialisation

                $message = ($age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";

                echo $message;
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $age = 17; // Vous pouvez modifier cette valeur
              $message = ""; // Initialisation

              $message = ($age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";

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