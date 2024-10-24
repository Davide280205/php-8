<?php

    $pageData = new stdClass();
    $pageData->title = "Porfolio test-site";
    $pageData->content = "<h1>Hello from an objects</h1>";

    require "templates/page.php";
    echo $page;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>