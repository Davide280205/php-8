<!-- STEP 1 - versione statica del sito -->

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Japan Journey</title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <h1>Japan Journey</h1>
</header>
<div id="wrapper">

    <!-- inserisco il menu di navigazione con del codice PHP -->

    <!-- si può usare anche include è UGUALE -->

    <!-- con include la pagina rimane navigabile anche se nn si ha caricato il file esterno, al contrario di require -->

    <?php require './includes/menu.php'; ?>

    <main>
        <h2>A Journey through Japan with PHP</h2>
        <p>Ut enim ad minim veniam, quis nostrud exercitation consectetur adipisicing elit. Velit esse cillum dolore ullamco laboris nisi in reprehenderit in voluptate. Mollit anim id est laborum. Sunt in culpa duis aute irure dolor excepteur sint occaecat.</p>
        <figure>
            <img src="images/maiko.jpg" alt="Maiko&mdash;trainee geishas in Kyoto" width="340" height="205" class="picBorder">
            <figcaption>Maiko&mdash;trainee geishas in Kyoto</figcaption>
        </figure>
        <p>Eu fugiat nulla pariatur. Ut labore et dolore magna aliqua. Cupidatat non proident, quis nostrud exercitation ut enim ad minim veniam.</p>
        <p>Consectetur adipisicing elit, duis aute irure dolor. Lorem ipsum dolor sit amet, ut enim ad minim veniam, consectetur adipisicing elit. Duis aute irure dolor ut aliquip ex ea commodo consequat.</p>
        <p>Quis nostrud exercitation eu fugiat nulla pariatur. Ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt velit esse cillum dolore ullamco laboris nisi.</p>
        <p>Sed do eiusmod tempor incididunt ullamco laboris nisi consectetur adipisicing elit. Ut aliquip ex ea commodo consequat. Qui officia deserunt ut labore et dolore magna aliqua. Velit esse cillum dolore eu fugiat nulla pariatur. Sed do eiusmod tempor incididunt cupidatat non proident, sunt in culpa. Sunt in culpa duis aute irure dolor excepteur sint occaecat.</p>
        <p>Quis nostrud exercitation eu fugiat nulla pariatur. Ut labore et dolore magna aliqua. Sunt in culpa duis aute irure dolor excepteur sint occaecat.</p>
    </main>

    <?php include './includes/footer.php'; ?>

</div>
</body>
</html>