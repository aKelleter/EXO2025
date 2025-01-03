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
  <div class="main mt-5">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <?= HTMLHeader("../../../", "Solution") ?>
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3 class="mt-5">Réponse</h3>
          <h4>Exercice 3 : Vérification de l'ouverture d'un magasin</h4>
          <div>           
            Un magasin est ouvert entre 9h et 18h. Écrire un script PHP pour vérifier si le magasin est ouvert ou fermé en fonction de l'heure actuelle.<br>
              
              <div class="mt-3">
                <u><b>Instructions</b></u> : <br>
                -  Créer une variable heure (simplification, l'heure sera exprimée avec un nombre entier : 2, 14, 23,...)<br>
                - Utiliser une structure conditionnelle pour vérifier si le magasin est ouvert ou fermé. <br>
                - Afficher "Le magasin est ouvert" ou "Le magasin est fermé" en fonction du cas. <br>
                - Modifiez la valeur de l'heure pour tester le script. <br>          
              </div>              
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $heure = 14;
                if ($heure >= 9 && $heure <= 18) {
                  echo "Le magasin est ouvert";
                } else {
                  echo "Le magasin est fermé";
                }
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $heure = 14;
              if ($heure >= 9 && $heure <= 18) {
                echo "Le magasin est ouvert";
              } else {
                echo "Le magasin est fermé";
              }
            ?>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs("../../../") ?>
</body>
</html>