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
    <h3>Exercice 1 : Les opérations arithmétiques de base</h3>
    <div class="mt-3">        
      Objectif : Utiliser les opérateurs arithmétiques de base en PHP. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.	Créez un fichier PHP (par exemple 07/op_arithmetiques.php). <br>
          2.	Écrivez un script PHP qui : <br>
            a.	Déclare deux variables $a et $b, et leur affecte des valeurs numériques. (par exemple : $a = 10, $b = 3). <br>
                Affichez dès le départ les valeurs de $a et $b. <br>
            b.	Affiche le résultat de l’addition de $a et $b. <br>
            c.	Affiche le résultat de la soustraction de $a et $b. <br>
            d.	Affiche le résultat de la multiplication de $a et $b. <br>
            e.	Affiche le résultat de la division de $a par $b. <br>
            f.	Affiche le reste de la division (modulo) de $a par $b. <br>
            g.	Affiche le résultat de l’élévation de $a à la puissance $b. <br>      
        </div>
    </div>       
    <div class="mt-3">
      <a href="exo-01-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
    </div>
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>