<?php

function getParagraph( string $content){

    return "<p>$content</p>";

}

$output = getParagraph("voglio questo testo nel mio primo paragrafo");

$output .= "<h1>titolo principale</h1>";

$output .= getParagraph("... e quest'altro nell'ultimo paragrafo");

echo $output;

echo getParagraph("...ma volgio finire con questo paragrafo");

?>