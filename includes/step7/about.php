<?php include './includes/title.php'; ?>
<?php include './includes/random_text.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Journey - <?php print $title; ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <h1>About</h1>
</header>
<div id="wrapper">

    <?php require './includes/menu.php'; ?>

    <figcaption> <?= $selectedText ?> </figcaption>

    <?php include './includes/footer.php'; ?>

</div>
    
</body>
</html>