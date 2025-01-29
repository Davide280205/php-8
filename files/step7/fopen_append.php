<?php

    if (isset($_POST['putContents'])) {

        $file = fopen('C:/private/append.txt', 'a');

        fwrtite($file, $_POST['contents'] . PHP_EOL);

        fclose($file);

    };

?>