<?php

    // stampa in maniera casuale le immagini

    $images = ['kinkakuji', 'maiko', 'maiko_phone', 'monk', 'fountains', 'ryoanji', 'menu', 'basin'];

    // conta quanti elementi ci sono negli array e ne toglie uno (in JavaScript = lenght -1)

    $i = random_int(0, count($images)-1);

    $selectedImage = "images/{$images[$i]}.jpg";

?>