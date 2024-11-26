<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../../", APP_NAME." : Exercice") ?>
</head>
<body>
  <div class="container">
  <?='<p><a href="index.php">back</a></p>'?>
    <pre>

      Exercice 03 : Priorité des opérateurs logiques

        Objectif : Que retourne l'expression suivante ?

        &lt;?php
          $result = 10 > 5 && 2 == 3 || 4 > 1;
          var_dump($result);
        ?&gt;

        Vous devez analyser et interprêter l'intruction suivante : 10 > 5 && 2 == 3 || 4 > 1
        en tenant compte des priorités de chacun des opérateurs logiques.
         
    </pre>
    <div>
      <a href="exo-03-resolution.php">exo-03-resolution.php</a>
    </div>  
  </div>
</body>
</html>




