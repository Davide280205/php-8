<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi Esercizio 1</title>
</head>
<body>

    <?php

        // Esercizio 1

        class Car{

            public $make;
            public $model;
            public $year;

            public function __construct($make, $model, $year){

                $this->make = $make;
                $this->model = $model;
                $this->year = $year;

            }

            public function start() {

                echo "L'automobile è partita.";

            }

            public function accelerate() {

                echo "L'automobile va a 10km/h.";

            }

            public function brake() {

                echo "L'automobile va a 5km/h in meno.";

            }

            public function intro() {

                echo "L'automobile {$this->make} con il modello {$this->model} è stata costrutia nel {$this->year}.";

            }

        };

        class Volvo extends Car {

            public function message() {

                echo "<b>Volvo</b>";

            }

        };

        $car = new Volvo ("Volvo", "XC70", "2020");

        $car-> message();

        echo "<br>";

        $car-> intro();

        echo "<br>";

        $car-> accelerate();

        class Maserati extends Car {

            public function message1() {

                echo "<b>Maserati</b>";

            }

        };

        $car = new Maserati ("Maserati", "Gran Turismo S", "2006");

        echo "<br>";

        $car-> message1();

        echo "<br>";

        $car-> intro();

        echo "<br>";

        $car-> accelerate();

        class Fiat extends Car {

            public function message2() {

                echo "<b>Fiat</b>";

            }

        };

        $car = new Fiat ("Fiat", "Panda", "2007", "100km/h");

        echo "<br>";

        $car-> message2();

        echo "<br>";

        $car-> intro();

        echo "<br>";

        $car-> accelerate();

        echo "<br>";

        $car-> brake();

    ?>
    
</body>
</html>