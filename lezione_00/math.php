<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>

    <?php

        $divisione = 10 / 2;
        echo $divisione;

        echo "<br>";

        // la % indica il resto -> 10/2 = 5 con il RESTO di 0
        $operazione = 10 % 2;
        echo $operazione;

        echo "<br>";

        $operazione2 = 23563 % 37;
        echo $operazione2;

        echo "<br>";

        $x = 5;
        $y = 6;

        // il -- diminuisce di 1 e ++ aumenta di 1 -> 4 * 7 = 28
        $nuovoRisultato = --$x * ++$y;

        echo $nuovoRisultato;

    ?>
    
</body>
</html>