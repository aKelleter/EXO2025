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
  <h3>Exercice 3 : Afficher  un texte simple avec echo, print et heredoc</h3>
  <div class="mt-3">        
    Objectif : Afficher un message de bienvenue avec echo, print et heredoc. <br>

      <div class="mt-3">
        <u><b>Instructions</b></u> : <br>
        - Créez un fichier PHP (par exemple 01/afficher.php). <br>
        - Utilisez la structure echo pour afficher le texte suivant : "Bienvenue sur notre webshop !&lt;br&gt;". <br>
        - Utilisez la structure print pour afficher le texte suivant : "De nouveaux produits sont disponibles !&lt;br&gt;".   <br>
        - Utilisez la syntaxe heredoc pour afficher le text suivant : “Grosse promotion sur les clés USB&lt;br&gt;”. <br>
      </div>
  </div>       
  <div class="mt-3">
    <a href="exo-03-resolution.php" class="btn btn-primary">Solution de l'exercice</a>
  </div>
  <hr>   
  <?= HTMLFooter() ?> 
  </div>
  <?= HTMLJs() ?>
</body>
</html>




