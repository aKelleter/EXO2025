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
    <?= HTMLHeader("../../../", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
    <h3>Exercice 1 : Déclaration et affichage de variables</h3>
    <div class="mt-3">        
        Objectif : Déclarer et initialiser des variables pour ensuite les afficher. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          1. Créez un fichier PHP (par exemple 04/variables1.php). <br>
          2. Déclarez une variable $nom et assignez-lui la valeur de votre prénom. <br>
          3. Déclarez une variable $age et assignez-lui votre âge. <br>
          4. Affichez les valeurs de ces variables en utilisant echo (affichage => Nom : Bob). <br>
          5. Une ligne par valeur, utilisez le caractère de concaténation pour afficher le texte et la valeur de la variable. <br>
          6. Pour terminer, affichez la phrase suivante : "Bonjour, je m'appelle [mon prénom] et j'ai [mon âge] ans.". <br>
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