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
          <h3>Exercice 1 :  Somme des nombres pairs</h3>
          Écrivez un script qui calcule et affiche la somme des nombres pairs compris entre 1 et 20 inclus. <br>
          <div class="mt-3">        
            - Utilisez une boucle while <br>
            - Effectuez un test dans votre boucle while pour vérifier si le nombre est pair <br>    
          </div>         
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
              $i = 1;
              $somme = 0;
              while ($i <= 20) {
                  if ($i % 2 == 0) { // Vérifie si le nombre est pair
                      $somme += $i; // Ajoute le nombre pair à la somme
                  }
                  $i++;
              }
              echo "La somme des nombres pairs compris entre 1 et 20 est : " . $somme;
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
             $i = 1;
             $somme = 0;
             while ($i <= 20) {
                 if ($i % 2 == 0) { // Vérifie si le nombre est pair
                     $somme += $i; // Ajoute le nombre pair à la somme
                 }
                 $i++;
             }
             echo "La somme des nombres pairs compris entre 1 et 20 est : " . $somme;
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

