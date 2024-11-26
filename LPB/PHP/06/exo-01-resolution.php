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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
            &lt;?php
                define("NOM_SITE", "JEDI NIGHT"); 
                echo NOM_SITE . "<br>";
                echo __FILE__ . "<br>";
                echo 'Cette ligne de code est la ligne : ' . __LINE__ . "<br>";
                echo 'Version PHP : ' . PHP_VERSION . "<br>";
            ?&gt;
            </textarea>            
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              define("NOM_SITE", "JEDI NIGHT"); 
              echo NOM_SITE . "<br>";
              echo __FILE__ . "<br>";
              echo 'Cette ligne de code est la ligne : ' . __LINE__ . "<br>";
              echo 'Version PHP : ' . PHP_VERSION . "<br>";
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

