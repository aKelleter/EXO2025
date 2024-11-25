<?php 
  include '../../../app/fct.php';
  include '../../../conf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>lpb/php/02/exos</title>
  <?= HTMLCss() ?>
</head>
<body>
  <div class="container">
  <h1 class="text-center">Liste des exercices</h1>
  <hr>
    <?php
        $dossier = ".";
        $explications = listerLesFichiersExplications($dossier);

        echo '<p><a href="../">back</a></p>';
        echo '<p>En rapport avec la leçon : <em class="text-danger">' . @file_get_contents($dossier.'/title.html') .'</em></p>';
        echo "<ol>";
        foreach($explications as $explication) {
            echo "<li><a href='$explication'>$explication</a></li>";
        }
        echo "</ol>";
    ?>
    <?php echo HTMLFooter(); ?>
  </div>
</body>
<? HTMLJs() ?>
</html>

