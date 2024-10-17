<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes 03</title>
</head>
<body>

    <?php

        $book = [

            'title' => 'Harry Potter',
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury'

        ];

        // metodo funzionante ma NON CORRETTO

        echo "$book[title] è stato scritto da $book[author]";

    ?>
    
</body>
</html>