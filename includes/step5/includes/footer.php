<!-- per aggiungere la data in PHP basta stampare date e aggiungere D/M/Y -->

<footer>

    <?php

        $startYear = 2006;
        $thisYear = date('Y');

        if ($startYear == $thisYear) {
            
            $output = $startYear;

        } else {

            $output = "{$startYear}&ndash;{$thisYear}";

        }

    ?>

    <?php // il <? (short echo tag) è una maniera più breve per scrivere il tag PHP ?>

    <p>&copy; <?= $output ?> Davide Corpus</p>

</footer>