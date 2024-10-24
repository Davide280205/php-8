<?php

    $page = "<!DOCTYPE html>

    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$pageData->title</title>
        $pageData->css
        $pageData->embeddedStyle
    </head>
    <body>

        $pageData->content
        
    </body>
    </html>
    
    ";

?>
