<?php

    // stampa i link di navigation.php

    include_once "views/navigation.php";
    $pageData = new stdClass();
    $pageData->title = "Davide Corpus Porfolio";
    // mette la navigazione nel contenuto
    $pageData->content = $nav;

    // aggiunta

    // isset controlla se una variabile ESISTE

    $navigationIsClicked = isset($_GET['page']);

    if ($navigationIsClicked) {

        $fileToLoad = $_GET['page'];

    } else {

        $fileToLoad = "skills";

    };

    include_once "view/$fileToLoad.php";
    $pageData->content .= $info;

    require "templates/page.php";
    echo $page;

?>