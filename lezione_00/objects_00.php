<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects 00</title>
</head>
<body>

    <?php

        class Fruit{

            // public è una funzione pubblica

            public $name;
            public $color;
            public $price;

            // per fare il construct (construttore) SERVONO i __
            // c'è sempre una funzione costruttore ed è particolare perché si scrive __cosntruct (con il doppio underscore)

            function __construct($name, $color, $price) {

                $this->name = $name;

                $this->color = $color;

                $this->price = $price;

            }

            function get_name() {

                return $this->name;

            }

            function get_color() {

                return $this->color;

            }

            function get_price() {

                return $this->price;

            }

        };

        // con questa sintassi si crea un oggetto -> apple è un oggetto ovvero una rappresentazione materiale (istanza) della classe

        $apple = new Fruit("Mela", "Rossa", "1€");

        echo $apple->get_name() . '<br>' . $apple->get_color() . '<br>' . $apple->get_price();

    ?>
    
</body>
</html>