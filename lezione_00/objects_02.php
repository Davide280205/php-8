<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects 02</title>
</head>
<body>

    <?php

        class Fruit{

            // il public rende una funzione pubblica = accessibile a tutti

            public $name;
            public $color;

            // per fare il construct (construttore) SERVONO i __

            public function __construct($name, $color) {

                $this->name = $name;
                $this->color = $color;

            }

            public function intro() {

                echo "Il frutto è {$this->name} e il colore è {$this->color}.";

            }

        };

        // questa è una subclass (sottoclasse)
        // extends eredita dalla classe Fruit

        class Strawberry extends Fruit{

            public function message() {

                echo "Sono perfetta sulle torte!";

            }

        };

        $strawberry = new Strawberry ("Fragola", "rosso");

        $strawberry-> message();

        echo "<br>";

        $strawberry-> intro();

        echo "<br>";

        class Banana extends Fruit{

            public function message1() {

                echo "A De Giorgio piace la banana";

            }

        };

        $banana = new Banana ("Banana", "giallo");

        $banana-> message1();

        echo "<br>";

        $banana-> intro();

    ?>
    
</body>
</html>