<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo foreach 2</title>
</head>
<body>

    <?php

        $book = [

            'title' => 'Promessi Sposi',
            'author' => 'Manzoni',
            'publisher' => 'Einaudi'

        ];

        foreach ($book as $key => $value) {
            
            echo "$key: $value<br>";

        }

    ?> 
    
</body>
</html>