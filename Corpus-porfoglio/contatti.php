<?php include './includes/titoli.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I miei contatti - <?php print $titolo; ?></title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="content">

        <?php require './includes/menu.php'; ?>

        <h2>I miei Contatti</h2>

        <ul>

            <li>Numero di telefono: 333 444 5559</li>
            <li>E-mail: davide.corpus@civiform.eu</li>

        </ul>

        <?php require './includes/footer.php'; ?>

    </div>
    
</body>
</html>