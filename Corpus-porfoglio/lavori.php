<?php include './includes/titoli.php'; ?>
<?php include './includes/random_image.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il mio lavoro - <?php print $titolo; ?></title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="content">

        <?php require './includes/menu.php'; ?>

        <div class="image">

            <h2>Immagini del mio lavoro</h2>

            <figure>
                <img src="<?= $selectedImage ?>" alt="Random Image">
                <figcaption><?= $descrizione ?></figcaption>
            </figure>

        </div>

        <h2>Lavoro</h2>

        <p>Dal punto di vista software sto studiando HTML, JavaScript, CSS, SCSS e PHP.<br>Hardware sto studiando i server e come si smontano i computer.</p>

        <?php require './includes/footer.php'; ?>

    </div>

</body>
</html>