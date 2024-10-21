<?php

    // è un array di array (array multidimensionale con tanti array associativi)

    // serve a dare i titoli alle immagini

    $images = [

        [
            'file' => 'kinkakuji',
            'caption' => 'Il padiglione dorato'
        ],

        [
            'file' => 'maiko',
            'caption' => 'Geishas in Kyoto'            
        ],

        [
            'file' => 'maiko_phone',
            'caption' => 'Ogni maiko ha un telefono'            
        ],

        [
            'file' => 'monk',
            'caption' => 'Un monaco'            
        ],

        [
            'file' => 'fountains',
            'caption' => 'Fontane a Tokyo'            
        ],

        [
            'file' => 'ryoanji',
            'caption' => 'Foglie autunnali'            
        ],

        [
            'file' => 'menu',
            'caption' => 'Menu del ristorante'            
        ],

        [
            'file' => 'basin',
            'caption' => 'Acqua nel tempio'            
        ]

    ];

    $i = random_int(0, count($images)-1);

    $selectedImage = "images/{$images[$i]['file']}.jpg";

    $caption = $images[$i]['caption'];

?>