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
          <?= HTMLHeader("../../../", "Solution") ?>
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Exercice 2 : Afficher le menu de navigation d'un site web avec la structure echo</h3>
          <div class="mt-3">        
          Objectif : Afficher le menu en décomposant les éléments : <br>
            - Accueil <br>
            - un espace ' ' <br>
            - Produits <br>
            - un espace ' ' <br>
            - Contact <br>

              <div class="mt-3">
                <u><b>Instructions</b></u> : <br>
                - Créez un fichier PHP (par exemple 01/menu.php). <br>
                - Utilisez la structure echo pour afficher le menu : “Accueil Produits Contact”. <br>  
              </div>
          </div>       
          <hr>   
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">     
              &lt;?php       
                echo "Acceuil", " ", "Produits", " ", "Contact";           
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              echo "Acceuil", " ", "Produits", " ", "Contact";   
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