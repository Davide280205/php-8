<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>

    <?php

        $movie = [

            'titolo' => 'Top Gun Maverick',
            'attore' => 'Tom Cruise',
            'regista' => 'Tony Scott'

        ];

        echo "{$movie['titolo']} ha come attore {$movie['attore']} e come regista {$movie['regista']}";

    ?>
    
</body>
</html>