<?php

    // mostra il percorso del file

    echo $_SERVER['SCRIPT_FILENAME'];

    echo "<br>";

    // mostra SOLO il nome del file

    echo basename($_SERVER['SCRIPT_FILENAME']);

?>