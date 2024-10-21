<!-- prende e toglie l'estensione del file -->

<?php 

$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

$title = str_replace('_', ' ', $title);

if ($title == 'index') {

    $title = 'benvenuti!';

    // rende le lettere di tutte le prime lettere delle parole MAIUSCOLA

    $title = ucwords($title);

}

?>