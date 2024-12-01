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
    <h3>Exercice 1 : Vérifier de la parité d'un nombre</h3>
      <div class="mt-3">        
        Pour ce faire, écrivez un script PHP qui vérifie si un nombre donné est pair ou impair. <br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Créer une variable contenant un nombre entier. <br>
          - Utiliser une structure conditionnelle pour vérifier si le nombre est pair ou impair. <br>
          - Afficher "Le nombre est pair" ou "Le nombre est impair" en fonction du cas. <br>
          - Modifiez la valeur de la variable pour tester le script. <br>
        </div>
      </div>       
      <div class="mt-3">
        <a href="exo-01-resolution.php" class="btn btn-primary">Solution exercice 1</a>
      </div>
      <hr>
      <h3>Exercice 2 : Catégoriser l'âge</h3>      
      <div class="mt-3">        
        Écrire un script PHP qui affiche une catégorie basée sur un âge donné : <br>
        - Moins de 18 ans : "Mineur" <br>
        - Entre 18 et 60 ans : "Adulte" <br>
        - Plus de 60 ans : "Senior" <br>
        
        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Créer une variable contenant un âge (nombre entier). <br>
          - Utiliser une structure conditionnelle pour catégoriser la personne en fonction de son âge. <br>
          - Afficher sa catégorie en fonction du cas. <br>
          - Modifiez la valeur de l'âge pour tester le script. <br>
        </div>

      </div>       
      <div class="mt-3">
        <a href="exo-02-resolution.php" class="btn btn-primary">Solution exercice 2</a>
      </div>   
      <hr>
      <h3>Exercice 3 : Vérification de l'ouverture d'un magasin</h3>
      <div class="mt-3">        
        Un magasin est ouvert entre 9h et 18h. Écrire un script PHP pour vérifier si le magasin est ouvert ou fermé en fonction de l'heure actuelle.<br>
        
        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          -  Créer une variable heure (simplification, l'heure sera exprimée avec un nombre entier : 2, 14, 23,...)<br>
          - Utiliser une structure conditionnelle pour vérifier si le magasin est ouvert ou fermé. <br>
          - Afficher "Le magasin est ouvert" ou "Le magasin est fermé" en fonction du cas. <br>
          - Modifiez la valeur de l'heure pour tester le script. <br>          
        </div>
          
      </div>       
      <div class="mt-3">
        <a href="exo-03-resolution.php" class="btn btn-primary">Solution exercice 3</a>
      </div>
      <hr> 
      <h3>Exercice 4 : Afficher le plus grand nombre</h3>
      <div class="mt-3">        
        Écrire un script PHP qui affiche le plus grand de trois nombres donnés.<br>        
        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          - Créer trois variables contenant des nombres entiers. <br>
          - Utiliser une structure conditionnelle pour afficher le plus grand nombre. <br>
          - Vous afficherez soit "Le nombre x est le plus grand" soit "Le nombre y est le plus grand" soit "Le nombre z est le plus grand". <br>
          - x, y, z désignent les variables contenant les nombres. <br>
          - Modifiez les valeurs des variables pour tester le script. <br>
        </div>          
      </div>       
      <div class="mt-3">
        <a href="exo-04-resolution.php" class="btn btn-primary">Solution exercice 4</a>
      </div>    
    <hr>   
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>