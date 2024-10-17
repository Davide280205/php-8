<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo foreach 1</title>
</head>
<body>

    <?php

        $shoppingList = ["patate", "pere", "maiale"];

        // la variabile $item è una variabile di conseguenza si può sostituire $item con qualsiasi altro nome di variabile

        foreach ($shoppingList as $item) {

            // il . UNISCE il <br>

            echo $item . '<br>';

        };

    ?> 
    
</body>
</html>