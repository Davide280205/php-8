<?php

    // stampa i link di navigation.php

    include_once "views/navigation.php";
    $pageData = new stdClass();
    $pageData->title = "Davide Corpus Porfolio";
    // mette la navigazione nel contenuto
    $pageData->content = $nav;

    // aggiunta

    $navigationIsClicked = isset($_GET['page']);

    if ($navigationIsClicked) {

        $fileToLoad = $_GET['page'];
        $pageData->content .= "<p>Presto caricheremo $fileToLoad.php</p>";

    }

    require "templates/page.php";
    echo $page;

?>