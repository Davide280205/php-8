<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apici</title>
</head>
<body>

    <?php

        //  $descrizione = 'David's house'; causa un ERRORE!

        //  $descrizione = 'David\'s house'; OPPURE

        $descrizione = "David's house";

        echo $descrizione;

        //  $descrizione2 = "La mia casa è "favolosa!""; causa un ERRORE!

        //  $descrizione2 = "La mia casa è \"favolosa!\""; OPPURE

        $descrizione2 = 'La mia casa è "favolosa!"';

        echo $descrizione2;

    ?>
    
</body>
</html>