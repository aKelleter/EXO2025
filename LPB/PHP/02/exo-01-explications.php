<?php 
  include '../../../conf.php';
  include '../../../app/fct.php';  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../../", APP_NAME . "Exercice 1") ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
    <h3>Exercice 1 : Utiliser les trois types de commentaire</h3>
    <div class="mt-3">        
        Objectif : Ecrire du code utilisant les trois façons de commenter du code. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          -	Créez un fichier PHP (par exemple 02/commentaire.php). <br>
          - Utilisez les trois syntaxes de commentaires <br>
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