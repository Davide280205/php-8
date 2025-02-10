<?php

    function safe($text){
        
        return htmlspecialchars($text, double_encode: false);

    }

    $testo = "Ciao <b>mondo</b>";

    echo $testo;

        // la funzione htmlspecialchars serve a sanitizzare il codice

    // echo htmlspecialchars($testo);

?>