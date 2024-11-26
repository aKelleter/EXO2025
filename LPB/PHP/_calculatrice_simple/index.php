<?php 
  include '../../../conf.php';
  include '../../../app/fct.php';  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?= HTMLhead("../../../", APP_NAME." : CalculatriX") ?>
</head>
<body>
    <div class="container">
        <?= HTMLHeader("../../../", "CalculatriX") ?>   
        <p><a href="../">back</a><br></p>    
        <p>
            <a href="index.php">Reset</a>
        </p>
        <form action="" method="post">
            <input type="text" name="nombre1" placeholder="Nombre 1">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="text" name="nombre2" placeholder="Nombre 2">        
            <button class="btn btn-primary" type="submit">Calculer</button>
        </form>
        <?php
            if (
                    (isset($_POST['nombre1']) && !empty($_POST['nombre1']) ) && 
                    (isset($_POST['nombre2']) && !empty($_POST['nombre2']) || $_POST['nombre2'] == 0)
                )
            {
                $nombre1 = $_POST['nombre1'];
                $nombre2 = $_POST['nombre2'];
                $operation = $_POST['operation'];

                echo "<h3>Calcul de : $nombre1 $operation $nombre2</h3>";

                switch ($operation) {
                    case '+':
                        $resultat = $nombre1 + $nombre2;
                        break;
                    case '-':
                        $resultat = $nombre1 - $nombre2;
                        break;
                    case '*':
                        $resultat = $nombre1 * $nombre2;
                        break;
                    case '/':
                        if ($nombre2 == 0) {
                            $resultat = "Division par zéro non autorisée, résultat indéfini";
                            break;
                        }
                        $resultat = $nombre1 / $nombre2;
                        break;
                    case '%':
                        $resultat = $nombre1 % $nombre2;
                        break;
                    default:
                        $resultat = "Erreur";
                        break;
                }
                echo "<h5>Résultat : $resultat</h5>";
            }else {
                if (!empty($_POST)) {
                    echo "<h5>Veuillez entrez les valeurs à calculer</h5>";
                }
                
            }
        ?>
        <?php echo HTMLFooter(); ?>
    </div>    
    <?= HTMLJs("../../../") ?>    
</body>
</html>