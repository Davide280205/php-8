<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch es 1</title>
</head>
<body>


    <?php

        $colore = 'blu';

            switch ($colore) {
                case 'rosso':
                    echo "$colore";
                    break;

                case 'verde':
                    echo "$colore";
                    break;
    
                default:
                    echo "colore non completato";
                    break;
            };

    ?>
    
</body>
</html>