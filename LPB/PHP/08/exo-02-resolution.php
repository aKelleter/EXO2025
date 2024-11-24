<?php require_once '../../../app/fct.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPB - PHP - 08 - EXO-02</title>
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
                $result = 10 - 5 * 2;
                echo $result;
                echo '<br>';
                $result = (10 - 5) * 2;
                echo $result;
            ?>           
          </div>
          <h3 class="mt-5">Réponse</h3>
          <div>
            - Le résultat sans parenthèses est zéro 0. <br>
            - On force l'interprêtation de la soustraction avec l'aide d'une paire de parenthèses. Le résultat sera 10.
          </div>
          <h3 class="mt-5">Le code source</h3>
          <div>
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">    
            $result = 10 - 5 * 2; // 0
            echo $result;

            $result = (10 - 5) * 2; // 10
            echo $result;
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

