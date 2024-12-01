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
  <div class="container">
    <?= HTMLHeader("../../../", "L'exercice") ?>
    <?='<p><a href="index.php">back</a></p>'?>
      <h3>Exercice 1 : Calculatrice basique</h3>
      <div class="mt-3">        
        Créez un script où l'utilisateur fournit deux nombres ($a et $b) et une opération ($operation : "+", "-", "*", "/"). 
        Utilisez un switch pour effectuer l'opération et afficher le résultat. Si une division par zéro est détectée, affichez "Erreur : 
        division par zéro".<br>

        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          Code à complèter :
          <pre>
            $a = 10;
            $b = 5;
            $operation = "+"; // Essayez avec "+", "-", "*", "/".

            // .. votre switch ici.
          </pre>         
        </div>
      </div>       
      <div class="mt-3">
        <a href="exo-01-resolution.php" class="btn btn-primary">Solution exercice 1</a>
      </div>
      <hr> 
      <h3>Exercice 2 : Convertir une note en texte</h3>
      <div class="mt-3">        
        Écrivez un script qui convertit une note chiffrée ($note) entre 0 et 20 en appréciation : <br> <br>
            - 0-9 : "Insuffisant" <br>
            - 10-12 : "Passable" <br>
            - 13-15 : "Bien" <br>
            - 16-20 : "Très bien" <br>
            - Si la note est hors de la plage, affichez "Note invalide". <br>
        <div class="mt-3">
          <u><b>Instructions</b></u> : <br>
          Code à complèter :
          <pre>
            $note = 14; // Exemple : 14.

            // .. votre switch ici.          
          </pre>     
        </div>
      </div>       
      <div class="mt-3">
        <a href="exo-02-resolution.php" class="btn btn-primary">Solution exercice 2</a>
      </div>
      <hr>     
    <?= HTMLFooter() ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>