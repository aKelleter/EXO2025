<?php 
  include '../../../conf.php';
  include '../../../app/fct.php';    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?= HTMLhead("../../../", APP_NAME." : Devinette") ?>
</head>
<body>
    <div class="container">
        <?= HTMLHeader("../../../", "Devinette") ?>   
        <p><a href="../">back</a><br></p>    
        <h3>Devinette</h3>
        <p>
            Crée un script qui utilise une boucle while pour demander à l'utilisateur de deviner un nombre (fixé dans le script). 
            La boucle continue tant que l'utilisateur ne trouve pas la bonne réponse.
        </p>
        <p>
            - Utilise une boucle while pour demander à l'utilisateur de deviner un nombre (fixé dans le script). <br>
            - Utilise la fonction rand() pour générer un nombre aléatoire entre 1 et 10. <br>
            - ex : <pre>$nb = rand(1, 10);</pre>
            - La boucle continue tant que l'utilisateur ne trouve pas la bonne réponse. <br>
            - Utilise la fonction readline() pour lire une entrée utilisateur. <br>
            - ex : <pre>$essai = (int)readline("Devine le nombre (entre 1 et 10) : ");</pre> <br>
            - Affiche le message "C'est plus grand !" si le nombre entré par l'utilisateur est plus petit que le nombre secret. <br>
            - Affiche le message "C'est plus petit !" si le nombre entré par l'utilisateur est plus grand que le nombre secret. <br>
            - Si l'utilisateur trouve la bonne réponse, le script affiche un message de félicitations.
        </p>

        <div class="red">
            <strong>Il faut exécuter le script dans un terminal pour pouvoir y jouer</strong>.
        </div>
        <div class="mt-5">
            Chemin du fichier sur votre système: <pre> <?= __DIR__.DS ?></pre>
        </div>
        <div>
            Commande à lancer dans un terminal pour vous placer dans le dossier sous Windows , MacOS ou Linux: <pre><span class="red">cd</span> <?= __DIR__.DS ?></pre>
        </div>
        <div>
           Commande pour lancer l'exécution du script: <pre><span class="red">php -f</span> devinette.php</pre>
        </div>

        <?php echo HTMLFooter(); ?>
    </div>    
    <?= HTMLJs("../../../") ?>    
</body>
</html>