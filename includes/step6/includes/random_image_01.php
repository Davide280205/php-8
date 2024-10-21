<?php

    $images = ['kinkakuji', 'maiko', 'maiko_phone', 'monk', 'fountains', 'ryoanji', 'menu', 'basin'];

    // conta quanti elementi ci sono negli array e ne toglie uno (in JavaScript = lenght -1)

    $i = random_int(0, count($images)-1);

    $selectedImages = "images/{$images[$i]}.jpg";

?>