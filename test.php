<?php

    $age = 17; // Vous pouvez modifier cette valeur
    $message = ""; // Initialisation

    $message = ($age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";

    echo $message;
    echo "<br>";

    //--------------------------------------------------------------------------------------------------------

    $prix = null; // Testez avec différentes valeurs : null, 50, 150

    $message = $prix ?? "Prix inconnu";
    $message = is_numeric($prix) ? ($prix > 100 ? "Prix élevé" : "Prix faible") : $message;

    echo $message;
    echo "<br>";

    //--------------------------------------------------------------------------------------------------------

    $note = 14; // Exemple : 14.

    switch (true) {
        case ($note >= 0 && $note <= 9):
            echo "Insuffisant";
            break;
        case ($note >= 10 && $note <= 12):
            echo "Passable";
            break;
        case ($note >= 13 && $note <= 15):
            echo "Bien";
            break;
        case ($note >= 16 && $note <= 20):
            echo "Très bien";
            break;
        default:
            echo "Note invalide";
    }

    echo '<br>';
    
    