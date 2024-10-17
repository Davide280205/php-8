<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

    <?php

        /*
        
            switch (varibile da testare) {

                case valore1:
                    azioni da eseguire;
                    break;

                case valore2:
                    azioni da eseguire;
                    break;

                default: azioni da eseguire;

            };

        */

        $myVar = 'arancia';

        switch ($myVar) {
            case 1:
                echo '$myVar è 1';
                break;

            case 'arancia':
                echo '$myVar è un frutto';
                break;
            
            default:
                echo '$myVar non è un frutto e non è 1';
                break;
        };

    ?>
    
</body>
</html>