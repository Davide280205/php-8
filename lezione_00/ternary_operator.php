<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>
</head>
<body>

    <?php

        $age = 19;

        if ($age >= 16) {

            $fareType = "adulto";

        } else {

            $fareType = "bambino";

        };

        echo $fareType;

        echo "<br>";

        // TERNARY OPERATOR: 

        // condition ? value if true : value if false

        // questo è uno pseudo codice

        $age = 14;

        $fareType = $age >= 16 ? "adulto" : "bambino";

        echo $fareType;

    ?>
    
</body>
</html>