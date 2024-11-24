<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 01 - EXO-01</title>
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
              echo "Bienvenue sur notre site !";
            ?>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">            
              echo "Bienvenue sur notre site !";            
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