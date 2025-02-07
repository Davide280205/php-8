<?php

    require_once 'includes/connection.php';
    if ($conn = dbConnect('write')){

        echo 'Connessione avvenuta con successo';

    };