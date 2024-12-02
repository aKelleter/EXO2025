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
    <h3>Exercice 2 : Nombre de chiffres</h3>
    <div class="mt-3">        
      Objectif : Écrivez un script qui utilise une boucle while pour compter le nombre de chiffres dans un entier donné. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Déclarez et initailisez un nombre entier <br>
          - Déclarez et initialisez un compteur <br>
          - Utilisez une boucle while pour compter le nombre de chiffres <br>
          - Astuce : <small class="extra-small">divisez le nombre par 10 à chaque itération et effectuez un casting</small> <br> 
          - Affichez le résultat <br>
        </div>
    </div>       
    <div class="mt-3">
      <a href="exo-02-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>

