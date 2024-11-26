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
          <h3>Exercice 3 : Afficher  un texte simple avec echo, print et heredoc</h3>
          <div class="mt-3">        
            Objectif : Afficher un message de bienvenue avec echo, print et heredoc. <br>

              <div class="mt-3">
                <u><b>Instructions</b></u> : <br>
                - Créez un fichier PHP (par exemple 01/afficher.php). <br>
                - Utilisez la structure echo pour afficher le texte suivant : "Bienvenue sur notre webshop !&lt;br&gt;". <br>
                - Utilisez la structure print pour afficher le texte suivant : "De nouveaux produits sont disponibles !&lt;br&gt;".   <br>
                - Utilisez la syntaxe heredoc pour afficher le text suivant : “Grosse promotion sur les clés USB&lt;br&gt;”. <br>
              </div>
          </div>       
          <h3 class="mt-5">Une solution</h3>
          <div>
            <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">  
              &lt;?php          
                echo "Bienvenue sur notre webshop !<br>";
                print "De nouveaux produits sont disponibles !<br>";
                $text = <<<EOT
                Grosse promotion sur les clés USB<br>
                EOT;
                echo $text;      
              ?&gt;
            </textarea>
          </div>
          <h3 class="mt-5">Résultat de l'exécution du script</h3>
          <div>             
            <?php
              echo "Bienvenue sur notre webshop !<br>";
              print "De nouveaux produits sont disponibles !<br>";
              $text = <<<EOT
              Grosse promotion sur les clés USB<br>
              EOT;
              echo $text;        
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
