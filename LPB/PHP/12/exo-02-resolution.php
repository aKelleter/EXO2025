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
          <h3>Exercice 2 : Nombre de chiffres</h3>
          <div class="mt-3">        
            Objectif : Écrivez un script qui utilise une boucle while pour compter le nombre de chiffres dans un entier donné. <br>
            <div class="mt-3">
              <u><b>Instructions</b></u> : <br>
              - Déclarez et initailisez un nombre entier <br>
              - Déclarez et initialisez un compteur <br>
              - Utilisez une boucle while pour compter le nombre de chiffres <br>
              - Astuce : <small class="extra-small">divisez le nombre par 10 à chaque itération et effectuez un casting</small> <br> 
              - Affichez le résultat <br>
            </div>
            
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $nombre = 123456; // Nombre à analyser
              $compteur = 0;

              while ($nombre > 0) {
                  $nombre = (int)($nombre / 10); // Supprime le dernier chiffre
                  $compteur++;
              }

              echo "Le nombre contient " . $compteur . " chiffres.";
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              $nombre = 123456; // Nombre à analyser
              $compteur = 0;

              while ($nombre > 0) {
                  $nombre = (int)($nombre / 10); // Supprime le dernier chiffre
                  $compteur++;
              }

              echo "Le nombre contient " . $compteur . " chiffres.";
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

