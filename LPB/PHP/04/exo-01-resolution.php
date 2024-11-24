<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 03 - EXO-01</title>
  <?= HTMLCss() ?>

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
                $nom = "Alain";
                $age = 54;
                
                echo "Nom : " . $nom . "<br>";
                echo "Age : " . $age . "<br>";
                echo "Bonjour, je m'appelle " . $nom . " et j'ai " . $age . ' ans.';
            ?>           
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
                $nom = "Alain";
                $age = 54;

                echo "Nom : " . $nom . "<br>";
                echo "Age : " . $age . "<br>";
                echo "Bonjour, je m'appelle " . $nom . " et j'ai " . $age . ' ans.';
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

