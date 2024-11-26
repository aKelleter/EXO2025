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
    <h3>Exercice 2 : Exercice sur les opérateurs d'affectation</h3>
    <div class="mt-3">        
      Objectif : Manipuler les opérateurs d'affectation permettent de définir une valeur à une variable et de la modifier. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.	Créez un fichier PHP (par exemple 07/op_affectation.php). <br>
          2.	Écrivez un script PHP qui : <br>
                  - Initialise une variable $x avec la valeur de 10. <br>
                  - Utilise les opérateurs d'affectation suivants : +=5, -=3, *=2, /=4, et affiche la valeur de $x après chaque opération. <br>          
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