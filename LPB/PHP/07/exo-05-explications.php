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
    <?= HTMLHeader("", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
    <h3>Exercice 5 : Exercice sur les opérateurs d'incrémentation et de décrémentation</h3>
    <div class="mt-3">        
      Objectif :  Utiliser les opérateurs (++ et --) qui permettent d'incrémenter ou de décrémenter une variable. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.	Créez un fichier PHP (par exemple 07/op_incdesinc.php). <br>
          2.	Écrivez un script PHP qui : <br>
                  - Initialise une variable $z avec une valeur de 5. <br>
                  - Affichez la valeur de départ de $z. <br>
                  - Utilisez les opérateurs d'incrémentation (++) et de décrémentation (--) : $z++, ++$z, $z--, --$z <br>
                  - Affichez la valeur l'opération (opérateur) avec la structure echo ou autre. <br>
                  - Et affichez ensuite la valeur de $z après chaque opération. <br>
        </div>
    </div>       
    <div class="mt-3">
      <a href="exo-05-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>