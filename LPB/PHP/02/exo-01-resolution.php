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
  <div class="main">  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <?= HTMLHeader("", "Solution") ?>
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 1 : Utiliser les trois types de commentaire</h3>
          <div class="mt-3">        
              Objectif : Ecrire du code utilisant les trois façons de commenter du code. <br>

              <div class="mt-3">
                <u><b>Instructions</b></u> : <br>
                -	Créez un fichier PHP (par exemple 02/commentaire.php). <br>
                - Utilisez les trois syntaxes de commentaires <br>
              </div>
          </div>              
          <hr>   
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">     
              &lt;?php       
                // La syntaxe sur une seule ligne

                /*
                  La syntaxe 
                  sur 
                  plusieurs ligne
                */

                # La syntaxe "shell" moins utilisée         
                echo "Il n'y a pas d'affichage tout est dans le code :)";         
                ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              // La syntaxe sur une seule ligne

                /*
                  La syntaxe 
                  sur 
                  plusieurs ligne
                */

                # La syntaxe "shell" moins utilisée         
                echo "Il n'y a pas d'affichage tout est dans le code :)";         
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