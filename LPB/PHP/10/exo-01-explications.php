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
  <div class="container">
    <?= HTMLHeader("../../../", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
      <h3>Exercice 1 : Majeur/Mineur avec une condition ternaire</h3>
      <div class="mt-3">        
        Écrivez une condition ternaire pour déterminer si une personne est majeure ou mineure à partir de son âge, et affichez un message correspondant. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          Code à complèter :
          <pre>
            $age = 17; // Vous pouvez modifier cette valeur
            $message = ""; // Initialisation

            // Utiliser une condition ternaire pour affecter un message à la variable $message
            // ...

            echo $message;
          </pre>         
        </div>
      </div>       
      <div class="mt-3">
        <a href="exo-01-resolution.php" class="btn btn-primary">Solution exercice 1</a>
      </div>
      <hr> 
      <h3>Exercice 2 : Nom d'utilisateur par défaut avec l'opérateur de fusion null</h3>
      <div class="mt-3">        
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
      <div class="mt-3">
        <a href="exo-02-resolution.php" class="btn btn-primary">Solution exercice 2</a>
      </div>
      <hr>
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
      </div>       
      <div class="mt-3">
        <a href="exo-03-resolution.php" class="btn btn-primary">Solution exercice 3</a>
      </div>
      <hr>    
      
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>