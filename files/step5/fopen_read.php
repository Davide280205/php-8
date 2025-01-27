<?php

// prende il percorso del file
$filename = 'C:/private/sonnet.txt';

// apre il file fopen sta per file open
$file = fopen($filename, 'r');

// legge il file fread sta per file read
$contents = fread($file, filesize($filename));

// chiude il file fclose sta per file close
fclose($file);

echo nl2br($contents);

?>