<?php

    function dbConnect($usertype){

        $host = 'localhost';
        $db = 'wordpress_db';

        if ($usertype == 'read'){

            $user = 'root';
            $pwd = 'root';

    }elseif ($usertype == 'write'){

            $user = 'root';
            $pwd = 'root';

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