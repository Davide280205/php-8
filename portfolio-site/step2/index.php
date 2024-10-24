<?php

    include_once "views/navigation.php";
    $pageData = new stdClass();
    $pageData->title = "Porfolio test-site";
    $pageData->content = $nav;

    require "templates/page.php";
    echo $page;

?>