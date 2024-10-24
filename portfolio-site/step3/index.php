<?php

    // stampa i link di navigation.php

    include_once "views/navigation.php";
    $pageData = new stdClass();
    $pageData->title = "Davide Corpus Porfolio";
    // mette la navigazione nel contenuto
    $pageData->content = $nav;

    require "templates/page.php";
    echo $page;

?>