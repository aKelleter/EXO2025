<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculatriX</title>
</head>
<body>
    <p><a href="../">back</a><br></p>
    <h1>CalculatriX</h1>
    <p>
        <a href="index.php">Reset</a>
    </p>
    <form action="" method="post">
        <input type="text" name="nombre1" placeholder="Nombre 1">
        <input type="text" name="nombre2" placeholder="Nombre 2">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Calculer</button>
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
                default:
                    $resultat = "Erreur";
                    break;
            }
            echo "<h2>Résultat : $resultat</h2>";
        }else {
            if (!empty($_POST)) {
                echo "<h2>Veuillez entrez les valeurs à calculer</h2>";
            }
            
        }
    ?>
    
</body>
</html>