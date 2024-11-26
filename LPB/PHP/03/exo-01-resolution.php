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
          <h3>Exercice 1 : Utiliser les structures 'echo' et 'print' pour afficher du contenu à l'écran</h3>
          <div class="mt-3">        
            Objectif : Manipuler les deux structures 'echo' et 'print'. <br>

              <div class="mt-3">
                <u><b>Instructions</b></u> : <br>
                1.  Créez un fichier PHP (par exemple 03/afficher.php). <br> <br>
                
                2.  Ecrivez une première instruction avec la structure 'echo' pour afficher le texte suivant :  <br> 
                    "Le temps est toujours cruel. Il semble s'écouler à des vitesses différentes pour chacun...", 
                    avec un retour à la ligne en HTML à la fin.  <br> <br>

                3.  Ecrivez une seconde instruction avec la structure 'print' pour afficher le texte suivant :  <br>
                    "Une épée n'a aucune force à moins que la main qui la tient n'ait du courage.", <br>
                    avec un retour à la ligne en HTML à la fin. <br> <br>

                4.  Ecrivez une troisième instruction avec 'echo' pour afficher les termes suivants : "Personnage", "Force", "Vie", "Action", <br>
                    avec un retour à la ligne en HTML à la fin. Passez plusieurs expressions à 'echo' (séparées par des virgules). Il doit <br>
                    y avoir un espace entre chaque terme. <br> <br>

                5.  Ecrivez une quatrième instruction avec la syntaxe courte de 'echo' pour afficher le texte suivant :  <br>
                    "Le courage n'a pas besoin d'être rappelé, car il n'est jamais oublié". <br> <br>
              </div>
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">    
                &lt;?php
                  echo "Le temps est toujours cruel. Il semble s'écouler à des vitesses différentes pour chacun...<br>";
                  print"Une épée n'a aucune force à moins que la main qui la tient n'ait du courage.<br>";
                  echo "Personnage", " ", "Force", " ", "Vie", " ", "Actions", "<br>";
                ?&gt;
                &lt;?= "Le courage n'a pas besoin d'être rappelé, car il n'est jamais oublié" ?&gt;
                
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              echo "Le temps est toujours cruel. Il semble s'écouler à des vitesses différentes pour chacun...<br>";
              print"Une épée n'a aucune force à moins que la main qui la tient n'ait du courage.<br>";
              echo "Personnage", " ", "Force", " ", "Vie", " ", "Actions", "<br>";
            ?>
            <?= "Le courage n'a pas besoin d'être rappelé, car il n'est jamais oublié" ?>                        
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

