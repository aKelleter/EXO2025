<?php include 'app/fct.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>EXO 2025</title>
</head>
<body>
  <div class="container">
    <h1>EXO 2025</h1>
    <?php
        $dossier = "lpb";
        $dossiers = listerLesDossiers($dossier);

        echo "<h3></h3>";
        echo "<ol>";
        foreach($dossiers as $dossier) {
            if ($dossier === "app" || $dossier === ".git") {
                continue;
            }
            echo "<li><a href='$dossier'>$dossier</a></li>";
        }
        echo "</ol>";
    ?>
  </div>
</body>
</html>

