<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>

    <?php

        /* CONDIZIONALE

            if (condizione è vera){

                esegui questo codice

            } else {

                esegui quest'altro codice

            }

            ////////////////////////////////////////////////

            if (condizione è vera){

                esegui questo codice

            } elseif {

                esegui quest'altro codice

            } else {
             
                codice di default se entrambi sono false

            }

            /////////////////////////////////////////////////

            if ($status == 'administrator) {
            
                // accedi alla admin page
            
            } else {
             
                // redirect alla home

            }

        */

        // la variabile se è FALSA NON viene stampata nel browser mentre se è VERA viene stampata nel browser

        $ok = true;

        if ($ok) {

            echo "va tutto bene...";

        };

    ?>
    
</body>
</html>