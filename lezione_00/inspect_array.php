<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspect Array</title>
</head>
<body>

    <?php

        // questo è un ARRAY MULTIDIMENSIONALE

        $books = [
        
            [

                'title' => 'Harry Potter',
                'author' => 'J.K. Rowling',

            ],

            [

                'title' => 'I promessi sposi',
                'author' => 'A. Manzoni',

            ],
        
        ];

        // serve ad ispezionare l'array

        print_r($books);

        echo "<br>";

        echo "L'autore de {$books[1]['title']} è stato scritto da {$books[1]['author']}";

    ?>
    
</body>
</html>