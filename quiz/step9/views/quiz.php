<?php

    $quizIsSubmitted = isset($_POST["quiz-submitted"]);

    if ($quizIsSubmitted) {

        $peso = $_POST["peso"];
        $altezza = $_POST["altezza"];
        $info = showQuizResponse($peso, $altezza);

        $info .= "<pre>";

        $info .= print_r($_POST, true);

        $info .= "</pre>";

    }else{

        include_once "views/quizform.php";

    }

    function showQuizResponse( string $peso, string $altezza ) : string{

        $bmi = $peso / (2*($altezza / 100));

        $bmi .= "Il tuo bmi è $bmi";

        return $bmi;

    }

?>