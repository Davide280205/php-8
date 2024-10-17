<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 05</title>
</head>
<body>

    <?php

        function doubleIt($number) {

            return $number *= 2;

        };

        $num = 4;

        $doubled = doubleIt($num);

        echo '$num is: ' . $num . '<br>';

        echo '$doubled is: ' . $doubled . '<br>';

        // arrow functions

        $num2 = 11;

        $creaSomma = fn ($num2) => $num2 + $num2;

        echo $creaSomma(11);

    ?>
    
</body>
</html>