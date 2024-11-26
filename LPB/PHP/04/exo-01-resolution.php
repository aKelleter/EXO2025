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
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
                &lt;?php
                  $nom = "Alain";
                  $age = 54;

                  echo "Nom : " . $nom . "<br>";
                  echo "Age : " . $age . "<br>";
                  echo "Bonjour, je m'appelle " . $nom . " et j'ai " . $age . ' ans.';
                ?&gt;                
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
             $nom = "Alain";
             $age = 54;

             echo "Nom : " . $nom . "<br>";
             echo "Age : " . $age . "<br>";
             echo "Bonjour, je m'appelle " . $nom . " et j'ai " . $age . ' ans.';
            ?>            
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>