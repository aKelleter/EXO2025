<?php 
  include '../../../app/fct.php';
  include '../../../conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?= HTMLhead("../../../", APP_NAME." : Liste des exercices PHP") ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("../../../", "Liste des exercices") ?>     
    <?php
        $dossier = ".";
        $explications = listerLesFichiersExplications($dossier);

        echo '<p><a href="../">back</a></p>';
        echo '<p>En rapport avec la leçon sur : <em class="text-danger">' . @file_get_contents($dossier.'/title.html') .'</em></p>';
        echo "<ol>";
        foreach($explications as $explication) {
            echo "<li><a href='$explication'>$explication</a></li>";
        }
        echo "</ol>";
    ?>
    <?php echo HTMLFooter(); ?>
  </div>
  <?= HTMLJs() ?>
</body>
</html>

