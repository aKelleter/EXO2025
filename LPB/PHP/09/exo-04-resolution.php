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
          <h4>Exercice 4 : Afficher le plus grand nombre</h4>
          <div>     
          Écrire un script PHP qui affiche le plus grand de trois nombres donnés.<br>        
            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              - Créer trois variables contenant des nombres entiers. <br>
              - Utiliser une structure conditionnelle pour afficher le plus grand nombre. <br>
              - Vous afficherez soit "Le nombre x est le plus grand" soit "Le nombre y est le plus grand" soit "Le nombre z est le plus grand". <br>
              - x, y, z désignent les variables contenant les nombres. <br>
              - Modifiez les valeurs des variables pour tester le script.  <br>
            </div>              
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $a = 12;
                $b = 25;
                $c = 8;

                if ($a > $b && $a > $c) {
                    echo "Le nombre $a est le plus grand.";
                } elseif ($b > $c) {
                    echo "Le nombre $b est le plus grand.";
                } else {
                    echo "Le nombre $c est le plus grand.";
                }
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $a = 12;
              $b = 25;
              $c = 8;

              if ($a > $b && $a > $c) {
                  echo "Le nombre $a est le plus grand.";
              } elseif ($b > $c) {
                  echo "Le nombre $b est le plus grand.";
              } else {
                  echo "Le nombre $c est le plus grand.";
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