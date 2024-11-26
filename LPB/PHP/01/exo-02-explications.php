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
  <div class="container">
      <?= HTMLHeader("../../../", "L'exercice") ?>
      <?='<p><a href="index.php">back</a></p>'?>
      <h3>Exercice 2 : Afficher le menu de navigation d'un site web avec la structure echo</h3>
      <div class="mt-3">        
      Objectif : Afficher le menu en décomposant les éléments : <br>
        - Accueil <br>
        - un espace ' ' <br>
        - Produits <br>
        - un espace ' ' <br>
        - Contact <br>

          <div class="mt-3">
            <u><b>Instructions</b></u> : <br>
            - Créez un fichier PHP (par exemple 01/menu.php). <br>
            - Utilisez la structure echo pour afficher le menu : “Accueil Produits Contact”. <br>  
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




