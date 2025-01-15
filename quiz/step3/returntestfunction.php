<?php

    function getParagraph(){

        return "<p>paragrafo creato da una funzione</p>";

    }

    $output = getParagraph();

    $output .= "<h1>Titolo principale</h1>";
    
    echo $output;

    echo getParagraph();

?>