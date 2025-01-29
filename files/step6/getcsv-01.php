<?php

    // la 'r' sta per read

    $file = fopen('C:/private/weather.csv', 'r');

    // crea un array e prende solo la prima riga

    $titles = fgetcsv($file);

    $cities = [];

    while (!feof($file)){

        $data = fgetcsv($file);

        $cities[] = array_combine($titles, $data);

    };

    fclose($file);

    //stampa il risultato

    echo '<pre>';

    print_r($cities);

    echo '<pre>';


?>