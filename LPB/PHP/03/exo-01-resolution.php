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
                echo "Le temps est toujours cruel. Il semble s'écouler à des vitesses différentes pour chacun...<br>";
                print"Une épée n'a aucune force à moins que la main qui la tient n'ait du courage.<br>";
                echo "Personnage", " ", "Force", " ", "Vie", " ", "Actions", "<br>";
            ?>
            <?= "Le courage n'a pas besoin d'être rappelé, car il n'est jamais oublié" ?>
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
                echo "Le temps est toujours cruel. Il semble s'écouler à des vitesses différentes pour chacun...<br>";
                print"Une épée n'a aucune force à moins que la main qui la tient n'ait du courage.<br>";
                echo "Personnage", " ", "Force", " ", "Vie", " ", "Actions", "<br>";
                &lt;?= "Le courage n'a pas besoin d'être rappelé, car il n'est jamais oublié" ?&gt;
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

