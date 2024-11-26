<?php 
  include '../../app/fct.php';
  include '../../conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../", APP_NAME." : Exercices PHP") ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("", "Exercices PHP") ?>
    <?php
        $dossier = "php";
        $dossiers = listerLesDossiers($dossier);

        echo '<p><a href="../">back</a></p>';
        echo "<h3>Exercices en rapport avec les leçons</h3>";
        echo "<ul>";
        foreach($dossiers as $dossier) {
            if ($dossier === "app" || $dossier === "00") {
                continue;
            }
            $titre = @file_get_contents($dossier.'/title.html'); 
            echo "<li><a href='$dossier'>$dossier</a> : <em>$titre</em></li>";
        }
        echo "</ul>";
    ?>
    <?php echo HTMLFooter("../../"); ?>
  </div>
  <?= HTMLJs("../../") ?>
</body>
</html>