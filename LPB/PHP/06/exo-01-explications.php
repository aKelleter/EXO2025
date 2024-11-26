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
    <h3>Exercice 1 : Travailler avec les constantes</h3>
    <div class="mt-3">        
      Objectif : Apprendre à travailler avec les constantes en PHP. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1.  Créez un fichier PHP (par exemple 06/constante.php). <br>
          2.  Définissez une constante nommée NOM_SITE avec la valeur "JEDI NIGHT" <br>
          3.  Affichez la valeur de la constante NOM_SITE. <br>
          4.  Utilisez la constante __FILE__ pour afficher le chemin complet du fichier. <br>
          5.  Utilisez la constante __LINE__ pour afficher le numéro de la ligne courante. <br>
          6.  Afficher la version PHP de votre serveur. <br>
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