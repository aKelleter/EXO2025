<?php 
  include 'app/fct.php';
  include 'conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("", APP_NAME) ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("", APP_NAME) ?>    
    <?php
        $dossier = "lpb";
        $dossiers = listerLesDossiers($dossier);

        echo "<h3>Modules</h3>";
        echo "<ol>";
        foreach($dossiers as $dossier) {
            if ($dossier === "app" || $dossier === ".git" || $dossier === "assets" || $dossier === "vendors") {
                continue;
            }
            echo "<li><a href='$dossier'>$dossier</a></li>";
        }
        echo "</ol>";
    ?>
    <?php echo HTMLFooter(); ?>    
  </div>
  <?= HTMLJs("") ?>
</body>
</html>

