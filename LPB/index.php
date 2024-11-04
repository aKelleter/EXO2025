<?php 
  include '../app/fct.php';
  include '../conf.php';
?>
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
    <h1 class="text-center">EXO LPB</h1>
    <hr>
    <?php
        $dossier = "php";
        $dossiers = listerLesDossiers($dossier);

        echo '<p><a href="../">back</a></p>';
        echo "<ol>";
        foreach($dossiers as $dossier) {
            if ($dossier === "app") {
                continue;
            }
            echo "<li><a href='$dossier'>$dossier</a></li>";
        }
        echo "</ol>";
    ?>
    <?php echo HTMLFooter(); ?>
  </div>
</body>
</html>