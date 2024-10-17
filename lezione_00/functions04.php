<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 04</title>
</head>
<body>

    <?php

        function doubleIt($number) {

            // *= moltiplica per il valore assegnato (in questo caso per 2)

            // il . UNISCE

            $number *= 2;

            echo 'Dentro la funzione, $number è: ' . $number . '<br>';

        };

        $number = 4;

        doubleIt($number);

        echo 'Fuori dalla funzione $number è: ' . $number;

    ?>
    
</body>
</html>