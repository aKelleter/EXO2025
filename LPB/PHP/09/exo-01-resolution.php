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
          <h4>Exercice 1 : Vérification de la parité d'un nombre</h4>
          <div>           
            Écrire un script PHP qui vérifie si un nombre donné est pair ou impair. <br>  
            <u><b>Instructions</b></u> : <br>
            - Créer une variable contenant un nombre entier. <br>
            - Utiliser une structure conditionnelle pour vérifier si le nombre est pair ou impair. <br>
            - Afficher "Le nombre est pair" ou "Le nombre est impair" en fonction du cas. <br> 
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
                $nombre = 15;

                if ($nombre % 2 == 0) {
                    echo "$nombre est pair.";
                } else {
                    echo "$nombre est impair.";
                } 
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $nombre = 15;

              if ($nombre % 2 == 0) {
                  echo "$nombre est pair.";
              } else {
                  echo "$nombre est impair.";
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