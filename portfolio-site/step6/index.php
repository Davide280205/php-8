<?php

    // stampa i link di navigation.php

    include_once "views/navigation.php";
    include_once "classes/Page_Data.class.php";

    $pageData = new stdClass();
    $pageData->title = "Davide Corpus Porfolio";
    $pageData->css = "<link href='css/layout.css' rel='stylesheet'/>";
    // mette la navigazione nel contenuto
    $pageData->content = $nav;

    // aggiunta

    // isset controlla se una variabile ESISTE

    $navigationIsClicked = isset($_GET['page']);

    if ($navigationIsClicked) {

        $fileToLoad = $_GET['page'];

    } else {

        $fileToLoad = "skills";

    }

    include_once "views/$fileToLoad.php";
    $pageData->content .= $info;

    require "templates/page.php";
    echo $page;

?>