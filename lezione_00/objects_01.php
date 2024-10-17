<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects 01</title>
</head>
<body>

    <?php

        class Fruit{

            public $name;
            public $color;

            // per fare il construct (construttore) SERVONO i __

            function __construct($name) {

                $this->name = $name;

            }

            function get_name() {

                return $this->name;

            }

            function __destruct() {

                echo "Addio da {$this->name}.";

            }

        };

        $apple = new Fruit("Apple");

    ?>
    
</body>
</html>