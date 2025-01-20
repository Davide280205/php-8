<?php

    // test di un array associativo

    $my['name'] = "Thomas";
    $my['year-of-birth'] = 1972;
    $my['height'] = "193 cm";

    // il codice qua sotto stampa in maniera preformattata i valori dell'array scritti sopra
    // serve a fare il debug

    $out = "<pre>";

    $out .= print_r($my, true);

    $out .= "</pre>";

    echo $out;


?>