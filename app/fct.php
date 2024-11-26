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

function HTMLhead($path, $title) {
    $html = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>'.$title .'</title>
        '. HTMLCss($path) .'
    ';
    return $html;
}


function HTMLCss($path = "../../../") {
    $html = '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel=stylesheet href="'.$path.'vendors/codemirror/lib/codemirror.css">
        <link rel=stylesheet href="'.$path.'vendors/codemirror/addon/display/fullscreen.css">
        <link rel=stylesheet href="'.$path.'vendors/codemirror/theme/material.css">
        <link href="'.$path.'assets/css/styles.css" rel="stylesheet">
    ';
    return $html;
}

function HTMLJs($path = "../../../") {
    $html = '
        <script src="'.$path.'vendors/jquery/jquery.min.js"></script>
        <script src="'.$path.'vendors/codemirror/lib/codemirror.js"></script>
        <script src="'.$path.'vendors/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="'.$path.'vendors/codemirror/mode/javascript/javascript.js"></script>
        <script src="'.$path.'vendors/codemirror/mode/css/css.js"></script>
        <script src="'.$path.'vendors/codemirror/mode/php/php.js"></script>
        <script src="'.$path.'vendors/codemirror/mode/sql/sql.js"></script>   
        <script src="'.$path.'vendors/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="'.$path.'vendors/codemirror/addon/display/fullscreen.js"></script>
        <script src="'.$path.'assets/js/_exo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    ';
    return $html;
}

function HTMLHeader($path, $title) {
    $html = '
        <h1 class="text-center">' . $title . '</h1>
        <hr>
    ';
    return $html;
}