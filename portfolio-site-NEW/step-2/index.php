<?php
    include_once "views/navigation.php"
    $pageData = new stdClass();
    $pageData->title = "Nuovo sito portfolio";
    $pageData->content = $nav;

    require "templates/page.php";

    echo $page;

?>