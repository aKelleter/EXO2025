<?php require_once '../../../app/fct.php';?>
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
        <div class="col-md-10 mt-5">
          <p><a href="javascript:history.back()">back</a><br></p>
          <h3>Résultats du code</h3>
          <div>
            <?php
               $result1 = 3 > 5 && 2 == 3 || 4 > 1; // true
               echo ($result1) ? "true" : "false"; // true
               echo '<br>'; 
               $result2 = 3 > 5 && (2 == 3 || 4 > 1); // false
               echo ($result2) ? "true" : "false";  // false
            ?>           
          </div>
          <h3 class="mt-5">Réponse</h3>
          <div>
            La solution d'interprêtation de l'expression suivante : <br>
            1. $result1 = 3 > 5 && 2 == 3 || 4 > 1; <br>
            2. // Évaluation pas à pas : <br>
            3. // 3 > 5 -> false <br>
            4. / 2 == 3 -> false <br>
            5. // false && false -> false <br>
            6. // false || 4 > 1 -> true <br>
            7. var_dump($result); // true  <br>

            <p>Explication : L'opérateur && a une priorité plus haute que ||. <br> Pour changer cela, utilisez des parenthèses : </p>

            $result = 10 > 5 && (2 == 3 || 4 > 1); // Cette expression retournera false

          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
              &lt;?php
               $result1 = 3 > 5 && 2 == 3 || 4 > 1; // true
               echo ($result1) ? "true" : "false"; // true
               echo '<br>'; 
               $result2 = 3 > 5 && (2 == 3 || 4 > 1); // false
               echo ($result2) ? "true" : "false";  // false
              ?&gt;
            </textarea>
          </div>
        </div>
        <div class="col-md-1"></div>  
      </div>    
    </div>  
  </div>

  <?= HTMLJs() ?>
</body>
</html>

