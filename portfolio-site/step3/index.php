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

        // il .= AGGIUNGE il paragrafo (in questo caso)

        $pageData->content .= "<p>Presto caricheremo $fileToLoad.php</p>";
        $pageData->content .= "<p>Benvenuti!</p>";

    }

    require "templates/page.php";
    echo $page;

?>