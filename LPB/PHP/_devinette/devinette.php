<?php
           
    $nombreSecret = rand(1, 10); // Nombre à deviner entre 1 et 10
    $essai = 0; // Variable pour l'entrée utilisateur
    
    while ($essai != $nombreSecret) {
        
        // Lit une entrée utilisateur
        $essai = (int)readline("Devine le nombre (entre 1 et 10) : ");

        if ($essai < $nombreSecret) {
            echo "C'est plus grand !\n";
        } elseif ($essai > $nombreSecret) {
            echo "C'est plus petit !\n";
        }

    }
    // Affiche un message de félicitations
    echo "Bravo, tu as trouvé le nombre secret : " . $nombreSecret;
?>