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

        include_once "views/$fileToLoad.php";

    }

    require "templates/page.php";
    echo $page;

?>