<?php
function listerLesFichiersExplications($dossier) {
    $fichiers = scandir($dossier);
    $fichiersExplications = [];
    foreach ($fichiers as $fichier) {
        if (strpos($fichier, "-explications.php") !== false) {
            $fichiersExplications[] = $fichier;
        }
    }
    return $fichiersExplications;
}

function listerLesFichiersResolutions($dossier) {
    $fichiers = scandir($dossier);
    $fichiersResolutions = [];
    foreach ($fichiers as $fichier) {
        if (strpos($fichier, "-resolution.php") !== false) {
            $fichiersResolutions[] = $fichier;
        }
    }
    return $fichiersResolutions;
}

function listerLesFichiers($dossier) {
    $fichiers = scandir($dossier);
    return $fichiers;
}

function listerLesDossiers() {
    $dossiers = scandir(".");
    $dossiers = array_filter($dossiers, function($dossier) {
        return is_dir($dossier) && $dossier !== "." && $dossier !== "..";
    });
    return $dossiers;
}

function HTMLFooter() {    
    $html = '
        <footer class="text-center mt-5"> 
            <span class="small">'. APP_VERSION . '</span>
        </footer>
    ';
    return $html;
}
