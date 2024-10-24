<?php

    $pageData = new stdClass();
    $pageData->title = "Porfolio test-site";
    $pageData->content = "<h1>Hello from an objects</h1>";

    require "templates/page.php";
    echo $page;

?>