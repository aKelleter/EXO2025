<?php 
  include '../app/fct.php';
  include '../conf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?= HTMLhead("../", APP_NAME . " : Module LPB") ?>
</head>
<body>
  <div class="container">
    <?= HTMLHeader("../", "EXO LPB") ?>
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
  <?= HTMLJs("../") ?>
</body>
</html>