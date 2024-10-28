<?php

    $immagini = [

        [
            'file'=> 'img1',
            'descrizione'=> 'Il mio guadagno'
        ],

        [
            'file'=> 'img2',
            'descrizione'=> 'Il mio lavoro'
        ]

    ];

    $i = random_int(0, count($immagini)-1);

    $selectedImage = "images/{$immagini[$i]['file']}.jpg";

    $descrizione = $immagini[$i]['descrizione'];

?>