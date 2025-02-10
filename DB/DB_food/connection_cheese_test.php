<?php

    require_once 'includes/connection_cheese.php';
    if ($conn = dbConnect('write')){

        echo 'Connessione avvenuta con successo';

    };