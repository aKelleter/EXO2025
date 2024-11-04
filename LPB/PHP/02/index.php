<?php include '../../../app/fct.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>lpb/php/01/exo-01</title>
</head>
<body>
  <div class="container">
  <h1>Liste des exercices</h1>
    <?php
        $dossier = ".";
        $explications = listerLesFichiersExplications($dossier);

        echo '<p><a href="../">back</a></p>';
        echo "<ol>";
        foreach($explications as $explication) {
            echo "<li><a href='$explication'>$explication</a></li>";
        }
        echo "</ol>";
    ?>
  </div>
</body>
</html>

