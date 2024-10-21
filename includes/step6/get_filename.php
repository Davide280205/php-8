<?php

    // SENZA il basename questo codice mostra tutto il percorso del file

    // echo $_SERVER['SCRIPT_FILENAME'];

    // CON basename mostra solo il nome del file

    echo basename($_SERVER['SCRIPT_FILENAME']);

?>