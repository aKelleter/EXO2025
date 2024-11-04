<p><a href="javascript:history.back()">back</a><br></p>
<?php
/*
 Exercice 3 : Afficher  un texte simple avec echo, print et heredoc

        Objectif : Afficher un message de bienvenue avec echo, print et heredoc.

      Instructions :

        1. Créez un fichier PHP (par exemple exercice3.php).
        2. Utilisez la structure echo pour afficher le texte suivant : "Bienvenue sur notre webshop !&lt;br&gt;".
        3. Utilisez la structure print pour afficher le texte suivant : "De nouveaux produits sont disponibles !&lt;br&gt;".  
        4. Utilisez la syntaxe heredoc pour afficher le text suivant : “Grosse promotion sur les clés USB&lt;br&gt;”.

 */

echo "Bienvenue sur notre webshop !<br>";
print "De nouveaux produits sont disponibles !<br>";
$text = <<<EOT
Grosse promotion sur les clés USB<br>
EOT;
echo $text;
