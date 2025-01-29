<?php

$filename = 'C:/private/sonnet.txt';

$file = fopen($filename, 'r');

$contents = '';

while (!feof($file)) {

    $contents .= fgets($file);

}

// chiude il file fclose sta per file close
fclose($file);

echo nl2br($contents);

?>