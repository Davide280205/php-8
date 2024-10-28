<?php 

$titolo = basename($_SERVER['SCRIPT_FILENAME'], '.php');

$titolo = str_replace('_', ' ', $titolo);

if ($titolo == 'index') {

    $titolo = 'benvenuti!';

    $titolo = ucwords($titolo);

}

?>