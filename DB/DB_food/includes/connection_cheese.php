<?php

    function dbConnect($usertype){

        $host = 'localhost';
        $db = 'food';

        if ($usertype == 'read'){

            $user = 'psread';
            $pwd = 'lupo';

    }elseif ($usertype == 'write'){

            $user = 'pswrite';
            $pwd = 'faina';

    }else{

        exit('Utente non riconosciuto');

    }

    // Connsessione al Database

    try {

        return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

    } catch (PDOException $e){

        echo $e->getMessage();

    }

    }

?>