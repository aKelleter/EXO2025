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
        '.HTMLNavigation($path).'
        <hr>
    ';
    return $html;
}

function HTMLNavigation($path) {

    $path = empty($path) ? './' : $path;
    $html = '
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="'.$path.'index.php">ExO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="'.$path.'index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'LPB/index.php">LPB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'LPB/PHP/index.php">PHP</a>
                </li>                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ExO PHP
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/01/index.php">01 - Hello World</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/02/index.php">02 - Commentaires</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/03/index.php">03 - echo / print</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/04/index.php">04 - Variables</a></li>                   
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/06/index.php">06 - Constantes</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/07/index.php">07 - Opérateurs</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/08/index.php">08 - Priorités des Op.</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/09/index.php">09 - if, else, elseif</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/10/index.php">10 - Ternaire / fusion null</a></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/11/index.php">11 - switch case</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="'.$path.'LPB/PHP/_calculatrice_simple/index.php">Calculatrice simple - formulaire</a></li>
                </ul>
                </li>                               
            </ul>
            </div>
        </div>
    </nav>';

return $html;
}