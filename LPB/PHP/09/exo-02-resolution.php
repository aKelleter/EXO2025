<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../../", APP_NAME." : Exercice") ?>
</head>
<body>
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 2 : Catégoriser l'âge</h3>      
          <div class="mt-5">        
            Écrire un script PHP qui affiche une catégorie basée sur un âge donné : <br>
            - Moins de 18 ans : "Mineur" <br>
            - Entre 18 et 60 ans : "Adulte" <br>
            - Plus de 60 ans : "Senior" <br>

            <u><b>Instructions</b></u> : <br>
            - Créer une variable contenant un âge (nombre entier). <br>
            - Utiliser une structure conditionnelle pour catégoriser la personne en fonction de son âge. <br>
            - Afficher sa catégorie en fonction du cas. <br>
            - Modifiez la valeur de l'âge pour tester le script. <br>

          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $age = 45;

              if ($age < 18) {
                  echo "Mineur";
              } elseif ($age <= 60) {
                  echo "Adulte";
              } else {
                  echo "Senior";
            ?&gt;
            </textarea>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
  </div>

  <?= HTMLJs() ?>
</body>
</html>

