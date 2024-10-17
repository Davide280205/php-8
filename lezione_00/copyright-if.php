<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copyright IF</title>
</head>
<body>

    <footer>

        <p>Sito sviluppato nel

            <?php

                $startYear = 2021;

                $thisYear = date('Y');

                if ($startYear == $thisYear) {

                    echo $startYear;

                } else {

                    echo "$startYear&ndash;$thisYear";

                }

            ?>

        </p>

    </footer>
    
</body>
</html>